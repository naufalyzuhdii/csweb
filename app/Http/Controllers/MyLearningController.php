<?php

namespace App\Http\Controllers;

use App\Models\MyLearning;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyLearningController extends Controller
{
    public function show_mylearning(){
        $my_learning = MyLearning::all();
        // dd($my_learning);

        return view('learner.my-learning.my-courses', ['my_learning' => $my_learning]);
    }
}
