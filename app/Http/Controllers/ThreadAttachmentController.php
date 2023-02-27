<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreadAttachment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ThreadAttachmentController extends Controller
{
    public function followup(Request $request){
        $rules = [
            'user_id' => 'required|integer',
            'description' => 'required|string|max:255',
            'threads_post_projects_id' => 'required|integer',
            'file' => 'mimes:pdf,docx,xlsx,pptx,png,jpg,jpeg,gif,mp4,zip'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $file = $request->file('file');
        $file_name = $request->file('file')->getClientOriginalName();
        $file->move('file/', $file_name);
        
        $followup = new ThreadAttachment();
        $followup->user_id = $request->user_id;
        $followup->description = $request->description;
        $followup->threads_post_projects_id = $request->threads_post_projects_id;
        $followup->file = $file_name;

        // dd($attachment);

        $followup->save();
        // dd($followup);
        return ['Follow Up Success!'];

    }
    // public function upload_attachment(Request $request){
    //     $rules = [
    //         'user_id' => 'required|integer',
    //         'description' => 'required',
    //         'threads_post_project_id' => 'required',
    //         'image' => 'required|image|mimes:jpg,png'
    //     ];
    //     $validator = Validator::make($request->all(), $rules);
    //     if ($validator->fails()) {
    //         return back()->withErrors($validator);
    //     }

    //     $course = new Course();
    //     $course -> user_id = Auth::user()->id;
    //     $course->title = $request->title;
    //     $course->description = $request->description;
    //     $course->price = $request->price;
    //     $course->category_id = $request->category;

    //     $file = $request->file('image');

    //     if($file != null)
    //     {
    //         // $file_name = time() . $file->getClientOriginalName();
    //         // Storage::putFileAs('public/images', $file, $file_name);
    //         $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
    //         $path = $file->move('course/',$fileName);
    
    //         $course->image =  $fileName;
    //     }


    //     $course->save();
        
    //     return redirect('/view/my-courses');
    // }
}
