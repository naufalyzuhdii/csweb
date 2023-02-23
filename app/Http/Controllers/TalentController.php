<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\ThreadsPostProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $category = Category::all();
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
        return view('talent.my-activity.talent-activity-applied-jobs');
    }
}