<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ThreadController extends Controller
{
    // LEARNER

    // public function view_thread_learner()
    // {
    //     return view('thread.learner.thread-learner');
    // }

    public function view_thread_learner()
    {
         return view('thread.learner.thread-learner');
    }

    public function view_create_thread_page_learner()
    {
        return view('thread.learner.create-thread-page-learner');
    }
    public function view_find_freelancers_talents()
    {
        return view('thread.learner.find-freelancers-talent');
    }
    public function view_thread_talent_detail()
    {
        return view('thread.learner.thread-talent-detail');
    }


    // TALENT

    public function view_thread_talent()
    {
        return view('thread.talent.thread-talent');
    }

    public function view_create_thread_page_talent()
    {
        return view('thread.talent.create-thread-page-talent');
    }

    // CONTROLL FUNCTION

    public function show_thread(){
        $threads = Thread::latest();
        if(request('search')){
            $products->where('name', 'like', '%'. request('search'). '%');
        }
        // $products = Product::all();
        return view('thread/learner/thread-learner', [
            "threads" => $threads->paginate(8)
        ]);
    }

    public function post_thread(Request $request)
    {
        $rules = [
            'project_title' => 'required|unique:threads',
            'description' => 'required',
            'skills_requirement' => 'required',
            'offered_duration' => 'required',
            'min_price' => 'required',
            'max_price' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $thread = new Thread();
        $thread->project_title = $request->project_title;
        $thread->description = $request->description;
        $thread->skills_requirement = $request->skills_requirement;
        $thread->offered_duration = $request->offered_duration;
        $thread->min_price = $request->min_price;
        $thread->max_price = $request->max_price;

        $thread->save();
        return redirect()->route('thread.learner.thread-learner-page');
    }

    
    // $inputed =  $request->input('item_price');
    // $item_price = (int)str_replace('.', '', $inputed);
    // $current_item_price = number_format($item_price, 0, ",", ".");

    public function update_thread(Request $request)
    {
        $thread = Thread::find($request->id);
        $thread->title = $request->title != null ? $request->title : $thread->title;
        $thread->topic = $request->topic != null ? $request->topic : $thread->topic;
        $thread->description = $request->description != null ? $request->description : $thread->description;
        $thread->duration = $request->duration != null ? $request->duration : $thread->duration;
        $thread->price = $request->price != null ? $request->price : $thread->price;
        $thread->category_id = $request->category != null ? $request->category : $thread->category_id;

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