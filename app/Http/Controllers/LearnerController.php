<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Applier;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Models\ThreadsPostProject;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LearnerController extends Controller
{
    public function view_my_dealed_projects(Request $request)
    {
        // $progress = ThreadsPostProject::
        // where('user_id', Auth::id())->where('status', 1)
        // ->orderBy('created_at', 'asc')->get();
        // dd($progress);
        // $talent = Applier::where('status', 1)->get();

        $applier = Applier::
        join('threads_post_projects','appliers.threads_post_projects_id','=','threads_post_projects.id')
        ->where('threads_post_projects.user_id', Auth::id())
        ->select('appliers.*')
        ->get();

        return view('learner.my-progress.dealed-projects.dealed-projects', compact('applier'));
    }   
    public function view_my_dealed_projects_details()
    {
        return view('learner.my-progress.dealed-projects.dealed-projects-details');
    }
    public function view_my_dealed_projects_details_information()
    {
        return view('learner.my-progress.dealed-projects.dealed-projects-details-information');
    }

    public function view_my_learning()
    {
        // $my_learning = TransactionDetail::where('user_id', Auth::id())->orderBy('created_at','desc')->get('course_id');
        // dd($my_learning);
        // $courses = Course::all();
        // foreach($courses as $course){
        //     if($course->id == $my_learning) return $course;
        // }
        // dd($course);
        return view('learner.my-learning.my-courses',);
    }
    public function view_course_learned_detail()
    {
        return view('learner.my-learning.course-learned-detail');
    }
    
    public function view_my_progress_find_freelances_talents()
    {
        return view('learner.my-progress.find-freelances-talents.find-freelances-talents');
    }
    public function view_learner_cart()
    {
        return view('learner.cart.cart');
    }


}