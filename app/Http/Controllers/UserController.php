<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function view_profile(){
        return view('auth.user-profile');
    }

    public function user_update(Request $request){
        $request->validate([
            'name' => ['string', 'required'],
            'email' => ['string', 'required'],
            'address' => ['string', 'required'],
            'phone' => ['string', 'required'],
        ]);
        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return back()->with('message', 'Your profile has been updated');
    }
}
