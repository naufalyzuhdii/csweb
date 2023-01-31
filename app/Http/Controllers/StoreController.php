<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Store;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function add_to_cart(Request $request){
        session()->put('cart', $request->post('cart'));

        return response()->json([
            'status' => 'added'
        ]);
        // $course = Course::find($id);
        // $old_cart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Store($old_cart);
        // $cart->add($course, $course->id);
        // $request->session()->put('cart', $cart);
        // return redirect('/view/topic-course');
    }

    public function cart(){
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];

        return view('learner.cart.cart')->with('cart', $cart);
        // if(!Session::has('cart')){
        //     return view('learner.cart.cart');
        // }
        // $old_cart = Session::get('cart');
        // $cart = new Store($old_cart);
        // return view('learner.cart.cart', ['courses' => $cart->items, 'total_price' => $cart->total_price]);
    }

    public function checkout(Request $request){
        $cart = session()->get('cart');

        $totalprice = 0;

        foreach ($$cart as $item) {
            $totalprice += $item['price'];
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->amount = $totalprice;
        $order->save();

        $data = [];

        foreach ($cart as $item) {
            $data['items'] = [
                [
                    'title' => $item['title'],
                    'price' => $item['price'],
                    'qty' => $item['qty'],
                ]
            ];

            $orderItem = new OorderItem();
            $orderItem->order_id = $order->id;
            $orderItem->course_id = $item['id'];
            $orderItem->quantity = $item['qty'];
            $orderItem->amount = $item['price'];
            $orderItem->save();

            return redirect('my_learning');
        }
        // if(!Session::has('cart')){
        //     return redirect()->route('checkout');
        // }
        // $oldCart = Session::get('cart');
        // $cart = new Store($oldCart);

        // Session::forget('cart');
        // return redirect('/view/course')->with('success', 'Checkout success!');
    }
}
