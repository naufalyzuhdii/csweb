<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function view_thread()
    {
        return view('general.thread');
    }
}
