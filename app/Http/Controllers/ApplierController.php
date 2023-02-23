<?php

namespace App\Http\Controllers;

use App\Models\Applier;
use App\Models\ThreadsPostProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ApplierController extends Controller
{
    public function apply(Request $request){
        $rules = [
            'apply_price' => 'required',
            'description' => 'required|string|max:255',
            // 'threads_post_projects_id' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $apply = Applier::create([
            'status' => 0,
            'apply_price' => $request->apply_price,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'threads_post_projects_id' => $request->threads_post_projects_id
        ]);


        $apply->save();
        return redirect()->back()->with('message','Your applied form has been sent!');
    }

    public function show_applier($id)
    {
        // $applier = Applier::all();
        $thread = ThreadsPostProject::find($id);
        $applier = Applier::where('threads_post_projects_id', $thread->id)->orderBy('created_at', 'desc')->get();
        $count = Applier::where('threads_post_projects_id', $thread->id)->orderBy('created_at', 'desc')->count();
        return view('applier.applier',compact('thread','applier','count'));
    }

    public function accept_applier(Request $request){
        $rules = [
            'applier_id' => 'required|integer',
            'threads_post_projects_id' => 'required|integer'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        // $accepted = Applier::with('threads_post_projects')->where('threads_post_projects_id', $request->threads_post_projects_id)->firstOrFail();
        // $accepted->threads_post_projects->status = 1;
        // $accepted->threads_post_projects->update();
        // $accepted->save();

        $accept = Applier::where('id', $request->applier_id)->with('threads_post_projects')->first();
        $accept->threads_post_projects->status = 1;
        $accept->threads_post_projects->fix_price = $accept->apply_price;
        $accept->threads_post_projects->update();
        $accept->status = 1;
        $accept->update();

        return redirect()->back()
        ->with('message','An applier has been accepted to work on this project.');
    }
}