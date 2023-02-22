<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseVideo;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

        // $video = CourseVideo::
        // join('course_details','course_videos.course_detail_id','=','course_details.id')
        // ->get();

        // dd($video);

        return view('talent.my-courses.my-course-detail-chapter', ['my_course' => $my_course])
        ->with('chapter', $chapter)
        ->with('video', $video);
    }
    public function upload_course_detail_chapter(Request $request)
    {
        $rules = [
            'course_chapter_title' => 'required|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $detail_chapter = new CourseDetail();
        $detail_chapter->course_id = $request->course_id;
        $detail_chapter->chapter = $request->course_chapter_title;

        $detail_chapter->save();

        return redirect()->back()
        ->with('message','Course Detail Chapter has been created successfully');

    }
    public function delete_course_detail_chapter($id)
    {
        $detail_chapter = CourseDetail::find($id);
        $detail_chapter->delete();

        return redirect()->back()
        ->with('message','Course Detail Chapter has been deleted successfully');

    }
    public function course_detail_chapter_upload_page($cid,$id)
    {
        $my_course = Course::find($cid);
        $detail_chapter = CourseDetail::find($id);

        $video = CourseVideo::where('course_detail_id', $id)->get();

        return view('talent.my-courses.my-course-detail-sub-chapter'
    ,compact('detail_chapter','video','my_course'));
    }

    public function show_materi($cid,$did,$id)
    {
        $my_course = Course::find($cid);
        $detail_chapter = CourseDetail::find($did);
        $video = CourseVideo::find($id);

        return view('talent.my-courses.my-course-detail-video-learning'
    ,compact('my_course','detail_chapter','video'));
    }




}