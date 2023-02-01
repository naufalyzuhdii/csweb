<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Store;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function add_to_cart($course_id){
        $cart = session('cart');
        $course = Course::get_course($course_id);
        $cart[$course_id] = [
            'title' => $course->title,
            'author' => $course->author,
            'category' => $course->category,
            'price' => $course->price,
            'image' => $course->image
        ];

        session(['cart' => $cart]);
        return redirect('/view/learner/cart');
        // $course = Course::find($id);
        // $old_cart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Store($old_cart);
        // $cart->add($course, $course->id);
        // $request->session()->put('cart', $cart);
        // return redirect('/view/topic-course');
    }

    public function cart(){
        $cart = session('cart');
        return view('learner.cart.cart')->with('cart', $cart);
        // if(!Session::has('cart')){
        //     return view('learner.cart.cart');
        // }
        // $old_cart = Session::get('cart');
        // $cart = new Store($old_cart);
        // return view('learner.cart.cart', ['courses' => $cart->items, 'total_price' => $cart->total_price]);
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
            $course_id = $ct;
            TransactionDetail::add_transaction_detail($course_id, $transaction_header_id);
        }
        // dd($transaction_header_id);
        session()->forget('cart');

        return redirect('/view/learner/cart');
        // if(!Session::has('cart')){
        //     return redirect()->route('checkout');
        // }
        // $oldCart = Session::get('cart');
        // $cart = new Store($oldCart);

        // Session::forget('cart');
        // return redirect('/view/course')->with('success', 'Checkout success!');
    }
}
