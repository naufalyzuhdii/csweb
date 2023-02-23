<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;   

class AuthController extends Controller
{
    public function view_signUp()
    {
        return view('auth.signUp');
    }
    public function signup(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|string|max:50',
            'dob' => 'required|date|before_or_equal:today',
            'phone' => 'required|unique:users,phone|min:8|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8|string'
        ];

        $validator = Validator::make($request->all(),$rules);

        // dd($validator);

        if($validator -> fails())
        {
            return back()->withErrors($validator);
        }

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'dob' => $request['dob'],
        ]);
        
        return redirect()->route('signin')->with('message','Sign Up Successfully. Please Sign In!');
        
    }
    public function view_signIn()
    {
        return view('auth.signIn');
    }
    public function signin(Request $request, User $user)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if ($request->remember) {
            Cookie::queue('mycookie', $request->email, 15);
        } else {
            Cookie::queue(Cookie::forget('mycookie'));
        }
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );
        
        if(Auth::attempt($user_data)){

            $user = Auth::user();

            if($user->role == "talent")
            {
                return redirect()->route('talent_home');
            }
            else if ($user->role == "learner")
            {
                return redirect()->route('learner_home');
            }
            else if($user->role == "admin")
            {
                return redirect()->route('admin_home');
            }

        }
        else{
            return back()->withErrors(['msg' => 'Sign In Failed!']);
        }
    }
    public function signout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }

    public function view_guest_home()
    {
        $parentcategories = Category::whereNull('parent_id')->get();

        return view('auth.guest-home', compact('parentcategories'));
    }
    
    public function view_learner_home()
    {
        $parentcategories = Category::whereNull('parent_id')->get();

        return view('auth.learner-home', compact('parentcategories'));
    }

    public function view_talent_home()
    {
        $parentcategories = Category::whereNull('parent_id')->get();

        return view('auth.talent-home', compact('parentcategories'));
    }

    public function view_admin_home()
    {
        $user = User::all();
        return view('auth.admin-home',compact('user'));
    }
}