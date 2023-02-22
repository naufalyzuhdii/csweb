<?php

namespace App\Http\Controllers;

use App\Models\ThreadsPostProject;
use App\Models\ThreadsFreelancersTalents;
use App\Models\Skills;
use App\Models\Applier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Controllers\DB;

class ThreadsPostProjectController extends Controller
{
    public function view_ThreadsPostProject_learner()
    {
        
        $threads = ThreadsPostProject::latest();
        
        if(request('search')){
            $threads->where('name', 'like', '%'. request('search'). '%');
        }
        // $products = Product::all();
        $applier = Applier::where('threads_post_projects_id', 1)->orderBy('created_at', 'desc')->count();
        return view('thread.learner.thread-learner', 
        [
            "threads" => $threads->paginate(5)
        ],compact('applier'));
    }
    public function view_ThreadsPostProject_learner_MyThread(Request $request, $id)
    {
        $user = User::find($id);
        $threads = ThreadsPostProject::latest()->where('user_id','=',$user->id)->get();
        
        $count = ThreadsPostProject::where('user_id','=',$user->id)->count();

        // $count_applier = Applier::where('threads_post_projects_id', 1)->orderBy('created_at', 'desc')->get();

        $count_applier = Applier::all();

        return view('thread.learner.mythread-learner',compact('threads','count','count_applier'));
    }
    public function view_my_appliers ()
    {
        return view('thread.learner.mythread-appliers');
    }
    public function view_ThreadsPostProject_learner_CreateThread()
    { 
        $skills = Skills::orderBy('name','asc')->get();
        return view('thread.learner.create-thread-page-learner',compact('skills'));
    } 

    public function post_thread(Request $request )
    {
        $rules = [
            'user_id' => 'required',
            'project_title' => 'required|max:70',
            'description' => 'required|max:70',
            'skills_requirement' => 'required',
            'offered_duration' => ['required'],
            'min_price' => 'required',
            'max_price' => 'required|gt:min_price',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $user = User::find($request->user_id);

        $skills = Skills::all();
        
        $thread = new ThreadsPostProject();
        $thread->user_id = $request->user_id;
        $thread->project_title = $request->project_title;
        $thread->description = $request->description;
        $thread->skills_id = $request->skills_requirement;
        $thread->offered_duration = $request->offered_duration;
        $thread->status = 0;

    
        
        // Convert inputan user (text) menjadi integer dan disimpan secara real integer di database
        $fix_min_price = (int)str_replace('.', '', $request->min_price);
        $fix_max_price = (int)str_replace('.', '', $request->max_price);

        $thread->min_price = $fix_min_price;
        $thread->max_price = $fix_max_price;

        // variable untuk ditampilin di depan
        $nominal_depan_min = number_format($thread->min_price, 0, ",", ".");
        $nominal_depan_max = number_format($thread->max_price, 0, ",", ".");

        // if($thread){
        //     $apply = Applier::create([
        //         'threads_post_projects_id' => $threads_post_projects->id,
        //         'status' => 0,
        //         'apply_price' => $request->apply_price,
        //         'description' => $request->description,
        //         'user_id' => Auth::user()->id,
        //     ]);
        // }

        $thread->save();

        $request->session()->flash('message', 'Thread has been created successfully!');
        return view('thread.learner.create-thread-page-learner',compact('user','nominal_depan_min','nominal_depan_max','skills'));
    }
    public function edit_thread($id)
    {
        $thread = ThreadsPostProject::find($id);
        $skills = Skills::all();
        
        return view('thread.learner.edit-thread',compact('thread','skills'));
    }
    public function update_thread(Request $request )
    {
        $attr = $request->validate([
            'project_title' => 'max:70' ,
            'description' => 'max:70',
            // 'skills_requirement' => 'required',
            // 'offered_duration' => 'required',
            // 'min_price' => 'required',
            'max_price' => 'required|gt:min_price',
            // $fix_min_price => 'required|max:13',
            // $fix_max_price => 'required|max:13|gt:min_price',
            // $fix_price => 'max:13|gte:min_price|lte:max_price',
            
          ]);

        auth()->user()->threadspostproject()->update($attr);

        $thread = ThreadsPostProject::find($request->thread_id);
        $thread->project_title = $request->project_title;
        $thread->description = $request->description;
        if($request->skills_requirement == null)
        {
            $thread->skills_id = $thread->skills_id;
        }
        else{
            $thread->skills_id = $request->skills_requirement;
        }

        if($request->offered_duration == null)
        {
            $thread->offered_duration = $thread->offered_duration;
        }
        else{
            $thread->offered_duration = $request->offered_duration;

        }
    
        // Convert inputan user (text) menjadi integer dan disimpan secara real integer di database
        // $fix_min_price = (int)str_replace('.', '', $request->min_price);
        // $fix_max_price = (int)str_replace('.', '', $request->max_price);
        // $fix_price = (int)str_replace('.', '', $request->fix_price);

        $thread->min_price = $request->min_price;
        $thread->max_price = $request->max_price;
        $thread->fix_price = 0;

        // variable untuk ditampilin di depan
        $nominal_depan_min = number_format($thread->min_price, 0, ",", ".");
        $nominal_depan_max = number_format($thread->max_price, 0, ",", ".");
        $nominal_depan_fix = number_format($thread->fix_price, 0, ",", ".");

        $thread->save();

        return back()->with('message', 'Your thread has been updated!', compact('thread'));

    }
    public function delete_thread($id)
    {
        $thread = ThreadsPostProject::find($id);
        $thread->delete();

        session()->flash('success-deleted', 'The thread has been deleted successfully');

        return redirect()->route('ThreadPostProject.Learner');
    }
    public function add_new_skills(Request $request)
    {
        $rules = [
            'new_skills' => 'max:20',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $skills = new Skills();
        $skills->name = $request->new_skills;

        $skills->save();

        return view('thread.learner.create-thread-page-learner', compact('skills'));
    }

    public function view_thread_talent_detail()
    {
        return view('thread.learner.thread-talent-detail');
    }

    public function upload_attachment(Request $request){
        $rules = [
            'user_id' => 'required|integer',
            'description' => 'required|string|max:255',
            'threads_post_projects_id' => 'required|integer',
            // 'file' => 'file|mimes:pdf,docx,xlsx,pptx,png,jpg,jpeg,gif,mp4,zip'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // $file = $request->file('file');
        // $file_name = $file->getClientOriginalName();
        // $file->move('file/', $file_name);
        
        $attachment = new ThreadAttachment();
        $attachment->user_id = $request->user_id;
        $attachment->description = $request->description;
        $attachment->threads_post_projects_id = $request->threads_post_projects_id;
        // $attachment->file = $file_name;

        // dd($attachment);

        $attachment->save();
        return ['Attachment Added!'];
    }
    
    public function thread_finished(Request $request){
        $rules = [
            'user_id' => 'required|integer',
            'threads_post_projects_id' => 'required|integer'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $finished = ThreadsPostProject::where('id', $request->threads_post_projects_id)->with('user')->first();
        $finished->user->balance = $finished->fix_price;
        $finished->user->update();
        $finished->status = 2;
        $finished->update();
        // $accept = Applier::where('id', $request->applier_id)->with('threads_post_projects')->first();
        // $accept->threads_post_projects->status = 1;
        // $accept->threads_post_projects->fix_price = $accept->apply_price;
        // $accept->threads_post_projects->update();
        // $accept->status = 1;
        // $accept->update();

        return ['Thread Finished!'];
    }



    

   






}    
// public function update_thread(Request $request)
// {
//     $thread = Thread::find($request->id);
//     $thread->title = $request->title != null ? $request->title : $thread->title;
//     $thread->topic = $request->topic != null ? $request->topic : $thread->topic;
//     $thread->description = $request->description != null ? $request->description : $thread->description;
//     $thread->duration = $request->duration != null ? $request->duration : $thread->duration;
//     $thread->price = $request->price != null ? $request->price : $thread->price;
//     $thread->category_id = $request->category != null ? $request->category : $thread->category_id;

//     $thread->save();
//     return ["Thread Updated"];
// }