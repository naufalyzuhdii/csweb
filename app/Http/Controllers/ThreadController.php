<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function view_thread()
    {
        return view('thread.thread');
    }

    public function view_create_thread_page_learner()
    {
        return view('thread.create-thread-page-learner');
    }
}
