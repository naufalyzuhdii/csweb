@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/cart/cart.css')}}">
@endsection

@section('content')

<section class="learner-cart">
    {{-- <?php
$a=array();
array_push($a,"test","test1");
print_r($a[1]);
?> --}}
    {{-- @if (Session::has('cart')) --}}
    <div class="learner-cart-wrapper">
        <!-- learner Cart Header -->
        <div class="learner-cart-header">
            <h1> <span>Cart</span> </h1>
            <p>Do transaction once you already added your choosen courses in cart.</p>
        </div>
        <!-- Learner Cart Header -->
        @if(session('message'))
        <div class="success">
            {{session('message')}}
        </div>
        @endif

        <!-- Learner Cart Content -->
        {{-- @dd($cart) --}}
        @if (empty($cart) || count($cart) == 0)
        <div class="warn">
            <h3>No Data</h3>
        </div>

        @else
        <div class="learner-cart-content">
            <!-- Cart Items Wrapper -->
            <div class="cart-items-wrapper">
                <!-- Cart Item Header -->
                {{-- <div class="cart-items-header">
                            <h2> <span> 2 </span> courses in cart</h2>
                        </div> --}}
                <!-- Cart Item Header -->
                <!-- Cart Items Content -->
                <div class="cart-items-content">
                    <!-- Courses Cart -->

                    <?php $totalprice  = 0; ?>

                    {{-- @dd($cart) --}}
                    @foreach ($cart as $ct => $val)
                
                    {{-- @dd($ct) --}}
                    {{-- @dd($user_array) --}}
                    {{-- @dd($user_array[0]->name) --}}
                    {{-- @dd($val['user_id']) --}}

                    <?php $price = $val['price']; ?>

                    <div class="courses-cart">
                        <div class="courses-cart-image-wrapper">
                            <div class="courses-cart-image">
                                <img src="{{ url('course/'. $val['image']) }}" alt="">
                            </div>
                        </div>
                        <div class="courses-cart-data">
                            <div class="courses-cart-data-wrapper">
                                <h2 class="courses-cart-title">{{ $val['title'] }}</h2>
                                <h3 class="courses-cart-category">
                                    {{--  {{ $val[course] }} --}}
                                </h3>
                                {{-- <h3 class="courses-cart-author">{{ $user_array[0]->name }}</h3> --}}
                                <!-- <h3 class="courses-total-hours"> <span>2 </span> total hours</h3> -->
                            </div>
                            <div class="courses-cart-data-price">

                                <?php
                                    $p = number_format($val['price'], 0, ",", ".");
                                ?>
                                <h2>Rp {{ $p }}</h2>
                            </div>
                            <div class="courses-cart-data-navigation">
                                <a href={{ route('removecart', $ct) }}>Remove</a>
                            </div>
                        </div>
                        <a href="/view/course/{{ $val['course_id'] }}/topic-course-detail" class="courses-links"></a>
                    </div>

                    <?php 
                    $totalprice += $price; 

                    $tp = number_format($totalprice, 0, ",", ".");

                    ?>
                    @endforeach
                    <!-- End Of Courses Cart -->
                </div>
                <!-- End Of Cart Items Content -->
            </div>
            <!-- Cart Items Wrapper -->

            <!-- Cart Checkouts -->
            <div class="cart-checkouts-wrapper">
                <h2>Total:</h2>
                <h3>Rp<span>{{ $tp }}</span></h3>

                <div class="checkout-btn">
                    <a href="{{ route('checkout') }}">checkout</a>
                </div>
            </div>
            <!-- End Of Cart Checkouts -->
        </div>

        <!-- Learner Cart Content -->

        @endif

    </div>
    {{-- @else
        <h2>No items in Cart!</h2>
    @endif --}}
</section>


@endsection