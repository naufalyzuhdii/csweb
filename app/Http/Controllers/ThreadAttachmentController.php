<?php

namespace App\Http\Controllers;

use App\Models\Applier;
use Illuminate\Http\Request;
use App\Models\ThreadAttachment;
use App\Models\ThreadsPostProject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ThreadAttachmentController extends Controller
{
    public function followup(Request $request){
        $rules = [
            'user_id' => 'required|integer',
            'description' => 'max:255',
            'threads_post_projects_id' => 'required|integer',
            'file' => 'mimes:pdf,png,jpg,jpeg,gif'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        if($request->description == null && $request->file('file') == null )
        {
            return redirect()->back()->withErrors($validator);
        }

        $followup = new ThreadAttachment();
        $followup->user_id = $request->user_id;
        $followup->description = $request->description;
        $followup->threads_post_projects_id = $request->threads_post_projects_id;

        $file = $request->file('file');
        
        // dd($file);

        if($file != null)
        {
            // $file_name = $file->getClientOriginalName();
            $file_name = uniqid(). '.' . $file->getClientOriginalExtension();
            $file->move('file/', $file_name);

            $followup->file = $file_name;
        }   
        

        // dd($attachment);

        $followup->save();
        // dd($followup);
        return redirect()->back();
        

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

    public function learner_followup_page($aid,$tid)
    {
        $applier = Applier::find($aid);

        $followup = ThreadAttachment::
        where('threads_post_projects_id',$tid)
        ->get();

        return view('followup.learner-followup-page',
        compact('applier','followup'));
    }

    public function talent_followup_page($aid,$tid)
    {
        $applier = Applier::find($aid);

        $followup = ThreadAttachment::
        where('threads_post_projects_id',$tid)
        ->get();

        return view('followup.talent-followup-page',
        compact('applier','followup'));
    }
}