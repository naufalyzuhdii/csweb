<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Course;
use App\Models\Category;
use App\Models\CourseVideo;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    // VIEW FUNCTION
    public function view_course()
    {
        $course = Course::all();
        
        return view('categories.course',compact('course'));
    }

    public function show_course($id)
    {
        $courses = Course::all();
        $categories = Category::find($id);
        
        // return view('categories.topic-course', [
        //     "courses" => $courses,
        // ]);

        return view('categories.topic-course',compact('courses','categories'));
    }

    public function search_course(){
        $courses = Course::all();

        if(request('search')){
            $courses->where('name', 'like', '%'. request('search'). '%');
        }

        return view('', compact('courses'));
    }

    public function show_course_by_category($id){
        $category = Category::find($id);
        $courses = Course::where('category_id', $category->id)->orderBy('created_at', 'desc')->get();

        return view('categories.topic-course',compact('category','courses'));
    }

    public function course_detail($id){
        $courses = Course::all();
        $course = Course::find($id);

        // $courseDetail = CourseDetail::where('course_id', $id)->get();
        // $video = DB::table('course_videos')
        // join('course_details', 'course_videos.course_detail_id','=','course_details.id')
        // ->select('course_videos.*')
        // ->where('course_videos.course_detail_id','course_details.id')
        // ->get();

        $courseDetail = CourseDetail::
        with('course_video')
        ->where('course_id',$id)
        ->get();


        return view('categories.topic-course-detail', 
        compact('courseDetail','courses','course'));
    }

    public function view_topic_course()
    {
        return view('categories.topic-course');
    }

    public function view_topic_course_detail()
    {
        return view('categories.topic-course-detail');
    }

    public function view_talent_profile()
    {
        return view('course.talent-profile-course');
    }

    // CONTROLL FUNCTION

    public function my_courses()
    {
        $my_courses = Course::where('user_id',Auth::id())->orderBy('created_at','asc')->simplePaginate(15);
        
        return view('talent.my-courses.my-courses')->with('my_courses', $my_courses);
    }

    public function post_course(Request $request)
    {
        $rules = [
            'title' => 'required|max:50',
            'category' => 'required',
            'description' => 'required|max:120',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,png'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $course = new Course();
        $course -> user_id = Auth::user()->id;
        $course->title = $request->title;
        $course->category_id = $request->category;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->category_id = $request->category;

        $course->finished =  0;

        $file = $request->file('image');

        if($file != null)
        {
            // $file_name = time() . $file->getClientOriginalName();
            // Storage::putFileAs('public/images', $file, $file_name);
            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $path = $file->move('course/',$fileName);
    
            $course->image =  $fileName;
        }


        $course->save();
        
        return redirect('/view/my-courses');
    }

    public function edit_course_page($id)
    {
        $course = Course::find($id)->first();
        $category = Category::all();

        return view('talent.my-courses.my-course-edit',compact('course','category'));
    }

    public function update_course(Request $request)
    {
        $course = Course::find($request->id);
        $course->title = $request->title != null ? $request->title : $course->title;
        $course->description = $request->description != null ? $request->description : $course->description;
        $course->price = $request->price != null ? $request->price : $course->price;
        $course->category_id = $request->category!=null ? $request->category : $course->category_id;

        $file = $request->file('image');

        if (isset($file)) {
            // $file_name = time() . $file->getClientOrOriginalName();
            // Storage::delete('public/' . $course->image);
            // Storage::putFileAs('public/images', $file, $file_name);
            // $course->image = 'public/' . $file_name;

            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $path = $file->move('course/',$fileName);

            $course->image =  $fileName;
        }

        $course->save();
        
        return redirect()->back()
        ->with('message','Course has been updated succesfully!');
    }

    public function delete_course($id)
    {
        $course = Course::find($id);

        $course->delete();
        return redirect()->back()->with('message','Course has been deleted!');
    }

    // public function course_finished(Request $request){
    //     $rules = [
    //         'user_id' => 'required|integer',
    //         'course_id' => 'required|integer'
    //     ];
    //     $validator = Validator::make($request->all(), $rules);
    //     if ($validator->fails()) {
    //         return back()->withErrors($validator);
    //     }
    // }
}