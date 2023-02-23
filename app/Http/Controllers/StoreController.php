<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Store;
use App\Models\Course;
use App\Models\MyLearning;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function add_to_cart($course_id){
        $cart = session('cart');
        $course = Course::get_course($course_id);
        $cart[$course_id] = [
            'title' => $course->title,
            // 'author' => $course->author,
            // 'category' => $course->category,
            'description' => $course->description,
            'price' => $course->price,
            'image' => $course->image
        ];

        session(['cart' => $cart]);
        dd($cart);
        return redirect('/view/learner/cart');
    }

    public function cart(){
        $cart = session('cart');
        return view('learner.cart.cart')->with('cart', $cart);
    }

    public function remove_cart($course_id){
        $cart = session('cart');
        unset($cart[$course_id]);
        session(['cart' => $cart]);
        return redirect('/view/learner/cart');
    }

    public function checkout(){
        $cart = session('cart');
        $transaction_header_id = TransactionHeader::add_transaction_header();
        foreach ($cart as $ct => $val){
            // dd($ct);
            // dd($val);
            $course_id = $ct;
            TransactionDetail::add_transaction_detail($course_id, $transaction_header_id);
            MyLearning::create([
                'title' => $val['title'],
                'description' => $val['description'],
                'image' => $val['image'],
                'user_id' => Auth::user()->id,
            ]);
        }
        
        session()->forget('cart');

        return redirect('/view/learner/cart');
    }
}
