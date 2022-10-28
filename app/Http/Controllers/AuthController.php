<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request){
        $validator = validator($request->all());
        if($validator->fails()){
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone']
        ]);
        return ["Sign Up Success!"];
    }

    public function signin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data)){
            return ["Sign In learner Success!"];
        }
        else{
            return ["Sign in Error!"];
        }
    }

    public function signout(){
        Auth::logout();
        return ["Sign Out Success!"];
    }
}