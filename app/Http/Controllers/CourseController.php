<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    // VIEW FUNCTION
    public function view_course()
    {
        $course = Course::all();
        return view('categories.course','course');
    }
    public function view_sub_course()
    {
        return view('categories.sub-course');
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

    public function show_course(){
        $courses = Course::all();

        if(request('search')){
            $courses->where('name', 'like', '%'. request('search'). '%');
        }
        
        return view('categories.topic-course', [
            "courses" => $courses
        ]);
        
    }

    public function course_detail($id){
        $course = Course::find($id);
        // $getall = Course::all();
        // dd($getall);
        return view('categories.topic-course-detail', ['course' => $course]);
    }

    public function my_courses()
    {
        $my_courses = Course::where('user_id',Auth::id())->orderBy('created_at','asc')->simplePaginate(15);
        

        return view('talent.my-courses.my-courses')->with('my_courses', $my_courses);
    }

    public function post_course(Request $request)
    {
        $rules = [
            'title' => 'required|unique:courses',
            'description' => 'required',
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
        $course->description = $request->description;
        $course->price = $request->price;
        $course->category_id = $request->category;

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

    public function update_course(Request $request)
    {
        $course = Course::find($request->id);
        $course->title = $request->title != null ? $request->title : $course->title;
        $course->description = $request->description != null ? $request->description : $course->description;
        $course->author = $request->author != null ? $request->author : $course->author;
        $course->price = $request->price != null ? $request->price : $course->price;
        $course->category_id = $request->category!=null?$request->category : $course->category_id;

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
        return ["Course Updated"];
    }

    public function delete_course($id)
    {
        $course = Course::find($id);

        $course->delete();
        return ["Course Deleted"];
    }
}