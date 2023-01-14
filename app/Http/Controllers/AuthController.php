<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function view_signUp()
    {
        return view('auth.signUp');
    }

    public function signup(Request $request)
    {
        $validator = validator($request->all());
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'dob' => $request['dob']
        ]);
        return redirect()->route('signin');
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


            return redirect()->route('learner_home');
        }
        else{
            return back()->withErrors("Not Registered", "signIn");
        }
    }

    public function signout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }



    public function view_learner_home()
    {
        return view('auth.learner-home');
    }

    public function view_talent_home()
    {
        return view('auth.talent-home');
    }
}