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
use App\Models\CertificationTalent;

class UserController extends Controller
{
  // admin only
    public function back()
    {
      return redirect()->route('admin_home');
    }


  // admin only

  
    public function view_profile($id)
    {
        $user = User::find($id);
        return view('auth.user-profile',compact('user')); 
    }



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
      $image = $request->file('image');

      $id = $request->input('id');

      if($image != null)
      {
        $current_image = $user->image; 
        // Storage::delete('public/profile/'.$current_image);
        // $filename = time() . '.' . $attr['image']->getClientOriginalExtension();
        // Storage::putFileAs('public/profile', $file, $filename);
        File::delete('profile/'.$current_image);
        $fileName = uniqid(). '.' . $image->getClientOriginalExtension();
        $path = $image->move('profile/',$fileName);

        $user->image = $fileName;
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

    public function view_upload_certification_page($id)
    {
      $user = User::find($id);
      return view('auth.upload-certification', compact('user'));
    }

    public function upload_user_certification(Request $request)
    {
      $attr = $request->validate([
        'id' => 'exists:users,id',
        'certification_document' => 'required|mimes:pdf,jpg|max:5000',
      ]);

      auth()->user()->update($attr);
      $user = User::find($request->id);
      
      $file = $request->file('certification_document');
      if($file != null)
      {
        $current_document = $user->certification_document; 
        File::delete('certification-document/'.$current_document);
        $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
        $path = $file->move('certification-document/',$fileName);
        
        $user -> certification_document = $fileName;
      }
      $user->save();

      return back()->with('message', 'Your certification has been uploaded. Please wait for the review result.', compact('user'));
    }


}