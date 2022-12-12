<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function view_thread()
    {
        return view('thread.thread');
    }

    public function view_create_thread_page_learner()
    {
        return view('thread.create-thread-page-learner');

use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThreadController extends Controller
{
    public function post_thread(Request $request)
    {
        $rules = [
            'title' => 'required|unique:threads',
            'topic' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $thread = new Thread();
        $thread->title = $request->title;
        $thread->topic = $request->topic;
        $thread->description = $request->description;
        $thread->duration = $request->duration;
        $thread->price = $request->price;
        $thread->category_id = $request->category;

        $thread->save();
        return ["Post Thread Success!"];
    }

    public function update_thread(Request $request)
    {
        $thread = Thread::find($request->id);
        $thread->title = $request->title != null ? $request->title : $thread->title;
        $thread->topic = $request->topic != null ? $request->topic : $thread->topic;
        $thread->description = $request->description != null ? $request->description : $thread->description;
        $thread->duration = $request->duration != null ? $request->duration : $thread->duration;
        $thread->price = $request->price != null ? $request->price : $thread->price;
        $thread->category_id = $request->category!=null?$request->category : $thread->category_id;

        $thread->save();
        return ["Thread Updated"];
    }

    public function delete_thread($id)
    {
        $thread = Thread::find($id);

        $thread->delete();
        return ["Thread Deleted"];
    }
}
