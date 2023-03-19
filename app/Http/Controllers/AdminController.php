<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skills;
use App\Models\Course;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;   
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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

    // VALIDATION SKILLS
    public function view_validation_skills()
    {   
        $skills = Skills::orderBy('status','desc')->get();
        
        return view('admin.validation-skills.view-validation-skills',compact('skills'));
    }
    public function add_skills(Request $request){
        $rules = [
            'skills_name' => 'max:20|unique:skills,name',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $skills = new Skills();
        $skills->name = $request->skills_name;

        $skills->save();
        
        return redirect()->route('validation.skills.page',compact('skills'))
        ->with('message','New Skill has been uploaded');
    }
    public function update_skills(Request $request){
        $rules = [
            'skills_name' => 'max:20',
        ];

        $skills = Skills::find($request->skills_id);
        $skills->name = $request->skills_name;
        $skills->status = $request->skills_status;

        $skills->save();

        

        return redirect()->route('validation.skills.page',compact('skills'))
        ->with('message','Skills has been updated!');
        
    }
    public function delete_skills($id)
    {
        $skills = Skills::find($id);
        $skills->delete();
        
        return redirect()->route('validation.skills.page');
    }

     // END OF VALIDATION SKILLS

    // VALIDATION COURSE
    public function view_validation_course()
    {
    $course = Course::all();
    $category = Category::all();
    return view('admin.validation-course.view-validation-course',compact('course','category'));
    }

    public function add_new_course(Request $request)
    {
        // $course_video = [];
        $rules = [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            // 'author' => 'required',
            'price' => 'required',
            'image' => 'required|image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        // $course_video[] = [
        //     'video' => $video,
        //     'video_title' => $video_title,
        // ];
        // $course = Course::create([
        //     'title' => request('title'),
        //     'title' => request('title'),
        //     'title' => request('title'),
        //     'title' => request('title'),
        // ])
        $course = new Course();
        $course -> user_id = Auth::user()->id;
        $course->title = $request->title;
        $course->category_id = $request->category;
        $course->description = $request->description;
        $course->price = $request->price;

        $file = $request->file('image');
        if($file != null)
        {
        $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
        $path = $file->move('course/',$fileName);
        $course->image = $fileName;
        }
        $course->save();
        return redirect()->route('view.validation-course',compact('course'))
        ->with('message','New course has been uploaded!');
    }

    public function update_course(Request $request)
    {
    $rules = [
        'title_update' => 'required',
        'category_update' => 'required',
        'description_update' => 'required',
        'price_update' => 'required',
        'image_update' => 'image|file|mimes:jpg,png|max:4024'
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator -> fails())
        {
            return back()-> withErrors($validator); // secara otomtatsi bkin variabel errrors
        }

        $course = Course::find($request->course_id);

        $course->user_id = $request->user_id;
        $course->title = $request->title_update;
        $course->description = $request->description_update;
        $course->price = $request->price_update;
        $course->status = $request->status_update;

        $file = $request->file('image_update');
        
        if($file != null)
        {
        File::delete('course/'.$course->image);
        $fileName = uniqid(). '.' . $file->getClientOriginalExtension();
        $path = $file->move('course/',$fileName);

        $course->image =  $fileName;
        }
        $course->save();

        return redirect()->route('view.validation-course',compact('course'))
        ->with('message','Course has been updated!');

    }

    public function delete_course($id)
    {
    $course = Course::find($id);
    $course->delete();

    return redirect()->route('view.validation-course', compact('course'));
    }
    // END OF VALIDATION COURSE


    // VALIDATION WITHDRAW
    public function view_validation_withdraw()
    {
        $user = User::orderBy('withdraw_status','asc')->get();
        return view('admin.validation-withdraw.view-validation-withdraw',compact('user'));
    }







    // END OF VALIDATION WITHDRAW

    

}