<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

    public function switch_role(Request $request )
    {
        $check = $request->input('switch_role');
        $id = $request->input('id');

        DB::table('users')->where('id',$id)->update(['role'=> $check]);

        if($check== "talent")
        {
            return redirect()->route('talent_home');
        }
        else if($check == "learner"){
            return redirect()->route('learner_home');
        }
        else{
            return redirect()->route('guest_home');
        }


    }
}