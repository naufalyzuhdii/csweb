<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function add_category(Request $request){
        $validatedData = $this->validate($request, [
            'name'      => 'required|min:3|max:255|string',
            'parent_id' => 'sometimes|nullable|numeric'
      ]);

        Category::create($validatedData);

        return ["Add Category Success"];
    }

    public function show_categories(){
        $parentcategories = Category::whereNull('parent_id')->get();

        return view('navigation.learner-template', compact('parentcategories'));
    }


    // public function on_create_course(){
    //     $categories = Category::all();
    //     return view('talent.my-courses.create-new-course', compact('categories'));
    // }
}