<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show_cart(){
        Cart::setGlobalTax(0);
        return view('learner.cart.cart');
    }
}
