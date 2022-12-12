<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{

    // VIEW FUNCTION

    public function view_course()
    {
        return view('categories.course');
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

    // CONTROLL FUNCTION

    public function get_all(){
        $courses = Course::latest();
        if (request('search')){
            $courses->where('name', 'like', '%'. request('search'). '%');
        }
    }

    public function post_course(Request $request)
    {
        $rules = [
            'title' => 'required|unique:courses',
            'description' => 'required',
            'author' => 'required',
            'price' => 'required',
            'image' => 'required|image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->author = $request->author;
        $course->price = $request->price;
        $course->category_id = $request->category;

        $file = $request->file('image');
        $file_name = time() . $file->getClientOriginalName();
        Storage::putFileAs('public/images', $file, $file_name);
        $course->image = 'images/' . $file_name;

        $course->save();
        return ["Post Course Success!"];
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
            $file_name = time() . $file->getClientOrOriginalName();
            Storage::delete('public/' . $course->image);
            Storage::putFileAs('public/images', $file, $file_name);
            $course->image = 'public/' . $file_name;
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