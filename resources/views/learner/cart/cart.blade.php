@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/cart/cart.css')}}">
@endsection

@section('content')

<section class="learner-cart">
    {{-- @if (Session::has('cart')) --}}
    <div class="learner-cart-wrapper">
        <!-- learner Cart Header -->
        <div class="learner-cart-header">
            <h1> <span>Cart</span> </h1>
            <p>Do transaction once you already added your choosen courses in cart.</p>
        </div>
        <!-- Learner Cart Header -->

        <!-- Learner Cart Content -->
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

                    @foreach ($cart as $ct => $val)

                    <?php $price = $val['price']; ?>

                    <div class="courses-cart">
                        <!-- Courses Cart Image-->
                        <div class="courses-cart-image-wrapper">
                            <div class="courses-cart-image">
                                <img src="{{ Storage::url($val['image']) }}" alt="">
                            </div>
                        </div>
                        <!-- End Of Courses Cart Image-->
                        <!-- Courses Cart Data -->
                        <div class="courses-cart-data">
                            <div class="courses-cart-data-wrapper">
                                <h2 class="courses-cart-title">{{ $val['title'] }}</h2>
                                <h3 class="courses-cart-category">
                                    <ul>
                                        {{-- <li>{{ $val[category->name] }}</li> --}}
                                    </ul>
                                </h3>
                                {{-- <h3 class="courses-cart-author">{{ $val['user']['name'] }}</h3> --}}
                                <h3 class="courses-total-hours"> <span>2 </span> total hours</h3>
                            </div>
                            <div class="courses-cart-data-price">
                                <h2>Rp {{ $val['price'] }}</h2>
                            </div>
                            <div class="courses-cart-data-navigation">
                                <a href={{ route('removecart', $ct) }}>Remove</a>
                            </div>
                        </div>
                        <!-- End Of Courses Cart Data -->
                        <a href="/view/topic-course-detail" class="courses-links"></a>
                    </div>

                    <?php $totalprice += $price; ?>
                    @endforeach
                    <!-- End Of Courses Cart -->
                </div>
                <!-- End Of Cart Items Content -->
            </div>
            <!-- Cart Items Wrapper -->

            <!-- Cart Checkouts -->
            <div class="cart-checkouts-wrapper">
                <h2>Total:</h2>
                <h3>Rp<span>{{ $totalprice }}</span></h3>

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