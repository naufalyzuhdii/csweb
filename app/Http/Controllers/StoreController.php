<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Store;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function add_to_cart(Request $request, $id){
        $course = Course::find($id);
        $old_cart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Store($old_cart);
        $cart->add($course, $course->id);
        $request->session()->put('cart', $cart);
        return redirect('/view/topic-course');
    }

    public function cart(){
        if(!Session::has('cart')){
            return view('learner.cart.cart');
        }
        $old_cart = Session::get('cart');
        $cart = new Store($old_cart);
        return view('learner.cart.cart', ['courses' => $cart->items, 'total_price' => $cart->total_price]);
    }

    public function checkout(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('checkout');
        }
        $oldCart = Session::get('cart');
        $cart = new Store($oldCart);

        Session::forget('cart');
        return redirect('/view/course')->with('success', 'Checkout success!');
    }
}
