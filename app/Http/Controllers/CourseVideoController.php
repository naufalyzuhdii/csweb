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
            'video' => 'required|file|mimetypes:video/mp4|max:20000',
        ]);

        $coursevideo = new CourseVideo();
        $coursevideo->video_title = $request->video_title;
        $coursevideo->course_detail_id = $request->course_detail_id;

        $file = $request->file('video');
        
        if ($request->hasFile('video')){
            // $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
            // $coursevideo->video = $path;

            $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
            $path = $file->move('videos/',$fileName);

    
            $coursevideo->video = $fileName;
        }

        $coursevideo->save();
        
        return back()
        ->with('message','Course video has been uploaded successfully');
    }

    public function delete_course_video($id)
    {
        $video = CourseVideo::find($id);
        $video->delete();
        
        return redirect()->back()
        ->with('message','Course Video has been deleted successfully');
    }


}