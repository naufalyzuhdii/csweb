<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\MyLearning;
use App\Models\CourseVideo;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyLearningController extends Controller
{
    public function show_mylearning($id){
        // $my_learning = MyLearning::all();
        $user = User::find($id);
        $my_learning = MyLearning::where('user_id', $user->id)->get();
        // dd($my_learning);

        return view('learner.my-learning.my-courses', ['my_learning' => $my_learning]);
    }

    public function view_course_learned_detail($id)
    {
        $coursedetail = CourseDetail::find($id)->with('course_video')->get();

        // dd($coursedetail);
        return view('learner.my-learning.course-learned-detail', compact('coursedetail'));
    }
}