<?php

namespace App\Http\Controllers;

use App\Models\Applier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ApplierController extends Controller
{
    public function apply(Request $request){
        $rules = [
            'apply_price' => 'required',
            'description' => 'required|string|max:255',
            'threads_post_projects_id' => 'required|integer'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $apply = Applier::create([
            'status' => 0,
            'apply_price' => $request->apply_price,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'threads_post_projects_id' => $request->threads_post_projects_id
        ]);

        $apply->save();
        return ['Apply Success!'];
    }

    public function show_applier(Request $request){
        $applier = Applier::where('threads_post_projects_id', $request->id)->orderBy('created_at', 'desc');

        return view('applier');
    }

    public function accept_applier(Request $request){
        $rules = [
            'applier_id' => 'required|integer'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $accept = Applier::where('id', $request->applier_id)->first();
        $accept->status = 1;
        $accept->update();

        return ['Applier Accepted'];
    }
}
