<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseVideo;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseDetailController extends Controller
{
    public function add_chapter(Request $request){
        // $course = $request->route('id');

        $this->validate($request, [
            'chapter' => 'required|string|max:255',
        ]);

        $coursedetail = new CourseDetail();
        $coursedetail->chapter = $request->chapter;
        $coursedetail->course_id = $request->course;

        $coursedetail->save();
        return back()->with('success', 'add chapter success!');
    }

    public function my_course_detail($id){
        $my_course = Course::find($id);
        // dd($my_course);
        $chapter = CourseDetail::where('course_id', $id)->get();
        // dd($chapter);

        $video = CourseVideo::where('course_detail_id', $id)->get();
        // dd($video);

        return view('talent.my-courses.my-course-detail-chapter', ['my_course' => $my_course])->with('chapter', $chapter)->with('video', $video);
    }
}
