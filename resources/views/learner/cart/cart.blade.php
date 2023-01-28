@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/cart/cart.css')}}">
@endsection

@section('content')

<section class="learner-cart">
    @if (Session::has('cart'))
        <div class="learner-cart-wrapper">
            <!-- learner Cart Header -->
            <div class="learner-cart-header">
                <h1> <span>Cart</span> </h1>
                <p>Do transaction once you already added your choosen courses in cart.</p>
            </div>
            <!-- Learner Cart Header -->

            <!-- Learner Cart Content -->

            <div class="learner-cart-content">
                <!-- Cart Items Wrapper -->
                <div class="cart-items-wrapper">
                    <!-- Cart Item Header -->
                    <div class="cart-items-header">
                        <h2> <span> 2 </span> courses in cart</h2>
                    </div>
                    <!-- Cart Item Header -->
                    <!-- Cart Items Content -->
                    <div class="cart-items-content">
                        <!-- Courses Cart -->
                        @foreach ($courses as $course)
                        <div class="courses-cart">
                            <!-- Courses Cart Image-->
                            <div class="courses-cart-image-wrapper">
                                <div class="courses-cart-image">
                                    <img src="{{ Storage::url($course['item']['image']) }}" alt="">
                                </div>
                            </div>
                            <!-- End Of Courses Cart Image-->
                            <!-- Courses Cart Data -->
                            <div class="courses-cart-data">
                                <div class="courses-cart-data-wrapper">
                                    <h2 class="courses-cart-title">{{ $course['item']['title'] }}</h2>
                                    <h3 class="courses-cart-category">
                                        <ul>
                                            <li>{{ $course['item']['category']['name'] }}</li>
                                        </ul>
                                    </h3>
                                    <h3 class="courses-cart-author">{{ $course['item']['author'] }}</h3>
                                    <h3 class="courses-total-hours"> <span>2 </span> total hours</h3>
                                </div>
                                <div class="courses-cart-data-price">
                                    <h2>Rp {{ $course['price'] }}</h2>
                                </div>
                                <div class="courses-cart-data-navigation">
                                    <a href="/remove">Remove</a>
                                </div>
                            </div>
                            <!-- End Of Courses Cart Data -->
                            <a href="/view/topic-course-detail" class="courses-links"></a>
                        </div>
                        @endforeach
                        <!-- End Of Courses Cart -->
                    </div>
                    <!-- End Of Cart Items Content -->
                </div>
                <!-- Cart Items Wrapper -->

                <!-- Cart Checkouts -->
                <div class="cart-checkouts-wrapper">
                    <h2>Total:</h2>
                    <h3>Rp<span>{{ $total_price }}</span></h3>

                    <div class="checkout-btn">
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <button type="submit">checkout</button>
                        </form>
                    </div>
                </div>
                <!-- End Of Cart Checkouts -->
            </div>

            <!-- Learner Cart Content -->
        </div>
    @else
        <h2>No items in Cart!</h2>
    @endif
</section>


@endsection