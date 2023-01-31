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

    public function view_certification_document($id)
    {
        $user = User::find($id);
        return view('admin.view-certification-document',compact('user'));
    }

    public function view_edit($id)
    {
        $user = User::find($id);
      return view('admin.view-certification-document',compact('user'));
    }

    public function update_certification_status(Request $request)
    {
        $attr = $request->validate([
            'id' => 'exists:users,id',
            'certification_status' => 'required',
          ]);
    
          auth()->user()->update($attr);

          $user = User::find($request->id);
          
          $user->certification_status = $request->certification_status;

          $user->save();

        return redirect()->back()->with('message','Status has been updated!');
    }

}