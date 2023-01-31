<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseDetailController extends Controller
{
    public function upload_video(Request $request){
        $this->validate($request, [
            'title_video' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
        $coursedetail = new CourseDetail();
        $coursedetail->title_video = $request->title_video;
        $coursedetail->course_id = $request->course;
        if ($request->hasFile('video')){
            $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
            $coursedetail->video = $path;
        }
        $coursedetail->save();
        return ["Post Video Success!"];
    }
}
