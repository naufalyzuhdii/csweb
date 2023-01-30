<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function view_profile($id)
    {
        $user = User::find($id);

        return view('auth.user-profile',compact('user')); 
        // return redirect()->route('profile.page');
    }

    // public function user_update(Request $request){
    //     $request->validate([
    //         'name' => ['string', 'required'],
    //         'email' => ['string', 'required'],
    //         'address' => ['string', 'required'],
    //         'phone' => ['string', 'required'],
    //         'image' => ['string', 'required'],
    //     ]);
    //     auth()->user()->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'address' => $request->address,
    //         'phone' => $request->phone,
    //         'image' => $request->image
    //     ]);
    //     return back()->with('message', 'Your profile has been updated');
    // }


    public function user_update(Request $request)
    {

      $attr = $request->validate([
        'id' => 'exists:users,id',
        'name' => ['string' , 'required','min:3'],
        'email' => ['email' ,'string', 'required', 'unique:users,email,'. auth()->id()],
        'dob' => ['date' , 'required'],
        'phone'=> ['string' , 'required','min:8','max:13','regex:/^([0-9\s\-\+\(\)]*)$/','unique:users,phone,'. auth()->id()],
        'image' => ['image' ,'file','mimes:jpg,png','max:1024,'],
      ]);

      auth()->user()->update($attr);

      $user = User::find($request->id);
      $file = $request->file('image');

      $id = $request->input('id');

      if($file != null)
      {
        $current_file = $user->image; 
        Storage::delete('public/profile/'.$current_file);
        $filename = time() . '.' . $attr['image']->getClientOriginalExtension();
        Storage::putFileAs('public/profile', $file, $filename);
       
        $user->image = $filename;
      }
      $user->save();


      return back()->with('message', 'Your profile has been updated!', compact('user'));
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