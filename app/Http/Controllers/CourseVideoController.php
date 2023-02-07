<?php

namespace App\Http\Controllers;

use App\Models\CourseVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseVideoController extends Controller
{
    public function upload_video(Request $request){
        $this->validate($request, [
            'video_title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $coursevideo = new CourseVideo();
        $coursevideo->video_title = $request->video_title;
        $coursevideo->course_detail_id = $request->course_detail;
        if ($request->hasFile('video')){
            $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
            $coursevideo->video = $path;
        }

        $coursevideo->save();
        return ["Add Video Success!"];
    }

    // public function show_video(){

    // }
}
