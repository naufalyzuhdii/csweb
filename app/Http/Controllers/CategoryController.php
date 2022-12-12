<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function add_category(Request $request){
        $categories = new Category();
        $categories->name = $request->name;
        $categories->save();

        return ["Add Category Success"];
    }
}
