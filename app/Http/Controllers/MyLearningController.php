<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\MyLearning;
use App\Models\CourseVideo;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyLearningController extends Controller
{
    public function show_mylearning($id){
        // $my_learning = MyLearning::all();
        // $user = User::find($id);
        $my_learning = MyLearning::
        // join('courses','my_learnings.course_id','=','courses.id')
        where('my_learnings.user_id', Auth::id())->get();
        // dd($my_learning);

        return view('learner.my-learning.my-courses', 
    compact('my_learning'));
    }

    public function view_course_learned_detail($id)
    {

        $course = Course::find($id);

        $courseDetail = CourseDetail::
        with('course_video')
        ->where('course_id',$id)
        ->get();

  
        // dd($coursedetail);
        return view('learner.my-learning.course-learned-detail', compact('course',
        'courseDetail'));
    }

    public function view_video($cid,$cdid,$id)
    {
        $course = Course::find($cid);
        $courseDetail = CourseDetail::find($cdid);
        $courseVideo = CourseVideo::find($id);

        return view('learner.my-learning.video-learning-page', compact('course',
        'courseDetail','courseVideo'
        ));
    }
}