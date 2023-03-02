<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Applier;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Models\ThreadsPostProject;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    
    public function view_my_progress_find_freelances_talents()
    {
        return view('learner.my-progress.find-freelances-talents.find-freelances-talents');
    }
    public function view_learner_cart()
    {
        return view('learner.cart.cart');
    }

    public function accept_order(Request $request)
    {
        $rules = [
            'applier_id' => 'required|integer',
            'user_id' => 'required|integer',
            'threads_post_projects_id' => 'required|integer',
            'applier_price' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $accept = Applier::where('id', $request->applier_id)->with('threads_post_projects')->first();
        $accept->threads_post_projects->status = 2;
        $accept->threads_post_projects->update();
        
        $user = User::where('id',$request->user_id)->first();
        if($user->balance == 0)
        {
            $user->balance = $request->applier_price;
        }
        else {
            $user->balance = $user->balance + $request->applier_price;
        }
        
        $user->update();
        
        return redirect()->back()
        ->with('message','You have accept the order!');
    }


}