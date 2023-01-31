<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;   
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function show_users()
    {
        $user = User::all();
        return redirect()->route('admin_home',compact('user')) ;
    }    
    // public function view_admin_home()
    // {
    //     return view('auth.admin-home');
    // }
}