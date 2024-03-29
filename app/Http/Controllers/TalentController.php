<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Applier;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ThreadsPostProject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class TalentController extends Controller
{
    // THREAD JOBS
    public function view_thread_apply_jobs()
    {
        $threads = ThreadsPostProject::latest();
        
        if(request('search')){
            $threads->where('name', 'like', '%'. request('search'). '%');
        }

        return view('thread.talent.thread-apply-jobs', 
        [
            "threads" => $threads->paginate(5)
        ],);
    }
    public function view_thread_apply_jobs_learner_detail($id)
    {
        $thread = ThreadsPostProject::find($id);

        $nominal_depan_min = number_format($thread->min_price, 0, ",", ".");
        $nominal_depan_max = number_format($thread->max_price, 0, ",", ".");
        $nominal_depan_fix = number_format($thread->fix_price, 0, ",", ".");

        $commision = $thread->fix_price * 0.1;
        $commision_depan = number_format($commision, 0, ",", ".");

        $net_income = $thread->fix_price - $commision;
        $net_income_depan = number_format($net_income, 0, ",", ".");

        return view('thread.talent.thread-apply-jobs-learner-detail',compact('thread',
            'nominal_depan_min', 'nominal_depan_max','nominal_depan_fix',
        'commision_depan','net_income_depan'));
    }
     // END OF THREAD JOBS

    public function view_create_new_course()
    {
        $category = Category::orderBy('name','asc')->get();
        return view('talent.my-courses.create-new-course',compact('category'));
    }
    public function view_my_courses()
    {
        $my_courses['my_courses'] = Course::where('user_id', Auth::id())->orderBy('title', 'asc')->get();
        return view('talent.my-courses.my-courses')->with('my_courses', $my_courses);
    }
    public function view_my_course_detail_chapter()
    {
        return view('talent.my-courses.my-course-detail-chapter');
    }
    public function view_my_course_detail_sub_chapter()
    {
        return view('talent.my-courses.my-course-detail-sub-chapter');
    }
    public function view_my_course_detail_video_learning()
    {
        return view('talent.my-courses.my-course-detail-video-learning');
    }

    public function view_talent_activity_applied_jobs()
    {
        $applier = Applier::
        join('threads_post_projects','appliers.threads_post_projects_id','=','threads_post_projects.id')
        ->where('appliers.user_id', Auth::id())
        ->select('appliers.*')
        ->get();


        return view('talent.my-activity.talent-activity-applied-jobs',compact('applier'));
    }

    public function finish_project(Request $request)
    {
        $rules = [
            'applier_id' => 'required|integer',
            'threads_post_projects_id' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $accept = Applier::where('id', $request->applier_id)->with('threads_post_projects')->first();
        $accept->status = 2;
        $accept->update();


        return redirect()->back()
        ->with('message','You have finished the project!');
    }

    public function view_balance($id)
    {
    $user = User::find($id);

    return view('talent.balance.balance',compact('user'));
    }

    public function withdraw(Request $request)
    {
        $rules = [
            'user_id' => 'required|integer',
            'withdraw_amount' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = User::where('id',$request->user_id)->first();


        if($user->balance == 0)
        {
            return redirect()->back()
            ->with('error','Balance insufficient');
        }
        elseif($user->balance > 0) {
            $user->balance = $user->balance - $request->withdraw_amount ;
            $user->update();
        }
    

        return redirect()->back()
        ->with('message','Withdraw successfully');


        
    }
}