<?php

namespace App\Http\Controllers;
use App\Models\ThreadsFreelancersTalents;
use App\Models\ThreadsPostProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Controllers\DB;

class ThreadsFreelancersTalentsController extends Controller
{
    // Thread Apply Jobs
    public function view_thread_apply_jobs()
    {
        $threads = ThreadsPostProject::all();
        return view('thread.talent.thread-apply-jobs',compact('threads'));
    }
    public function view_thread_apply_jobs_learner_detail($id)
    {
        $thread = ThreadsPostProject::find($id);

        $nominal_depan_min = number_format($thread->min_price, 0, ",", ".");
        $nominal_depan_max = number_format($thread->max_price, 0, ",", ".");
        $nominal_depan_fix = number_format($thread->fix_price, 0, ",", ".");

        $commision = $thread->fix_price * 0.1;
        $commision_depan_fix = number_format($commision, 0, ",", ".");

        $net_income = ($thread->fix_price) - ($commision);
        $net_income_depan_fix = number_format($net_income, 0, ",", ".");

        return view('thread.talent.thread-apply-jobs-learner-detail',   
        compact('thread','nominal_depan_min','nominal_depan_max','nominal_depan_fix','commision_depan_fix','net_income_depan_fix'));
    }
    // Thread Apply Jobs




    // Post Your Shop - Thread Freelancers Talents
    public function view_create_thread_page_talent()
    {
        return view('thread.talent.create-thread-page-talent');
    }
    // Post Your Shop - Thread Freelancers Talents


}