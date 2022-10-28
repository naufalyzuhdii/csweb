<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function post_product(Request $request){
        $rules = [
            'name' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $file = $request->file('image');
        $file_name = time().$file->getClientOriginalName();
        Storage::putFileAs('public/images', $file, $file_name);
        $product->image = 'images/'.$file_name;

        $product->save();
        return ["Post Product Success!"];
    }
    public function update_product(Request $request){
        $product = Product::find($request->id);
        $product->name = $request->name!=null?$request->name : $product->name;
        $product->description = $request->description!=null?$request->description : $product->description;
        $product->price = $request->price!=null?$request->price : $product->price;

        if(isset($file)){
            $file_name = time().$file->getClientOrOriginalName();
            Storage::delete('public/'.$product->image);
            Storage::putFileAs('public/images', $file, $file_name);
            $product->image = 'public/'.$file_name;
        }

        $product->save();
        return ["Product Updated"];
    }
    public function delete_product($id){
        $product = Product::find($id);

        $product->delete();
        return ["Product Deleted"];
    }
}
