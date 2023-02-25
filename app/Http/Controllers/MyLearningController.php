<?php

namespace App\Http\Controllers;

use App\Models\MyLearning;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class MyLearningController extends Controller
{
    public function show_mylearning($id){
        // $my_learning = MyLearning::all();
        $user = User::find($id);
        $my_learning = MyLearning::
        where('user_id', $user->id)->get();

        return view('learner.my-learning.my-courses', ['my_learning' => $my_learning]);
    }

    public function view_course_learned_detail()
    {
        


        return 
        view('learner.my-learning.course-learned-detail');
    }
}