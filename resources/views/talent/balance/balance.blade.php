@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/balance/balance.css')}}">
@endsection

@section('content')
<section class="balance">
    <div class="section-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Balance</span> </h1>
            <p>Here is your acumulative balance of your income.
            </p>
        </div>
        <!-- End Of Title Heading -->

        @if (session('message'))
        <div class="success">
            {{ session('message') }}
        </div>
        @endif

        <div class="balance-content-wrapper">
            <div class="balance-row">
                <div class="balance-header">
                    <h3>Your balance</h3>
                    <span>:</span>
                </div>
                <?php
                    $user_balance = number_format($user->balance, 0, ",", ".");
                ?>
                <div class="balance-content">
                    <h3>Rp. {{$user_balance}}</h3>
                </div>
            </div>

            <div class="balance-row">
                <div class="balance-header">
                    <h3>Withdraw amount</h3>
                    <span>:</span>
                </div>


                <div class="balance-content">
                    <form action="/withdraw" enctype="multipart/form-data" method="post" id="withdraw_form">
                        @csrf
                        <input type="text" name="user_id" value="{{$user->id}}" hidden>
                        <div class="withdraw-amount">
                            <span> Rp.</span>
                            <input type="number" name="withdraw_amount" placeholder="Enter Withdraw Amount"
                                max="{{$user->balance}}">
                        </div>
                        @error('withdraw_amount')
                        <div class="danger">
                            {{$message}}
                        </div>
                        @enderror
                    </form>
                </div>
            </div>

            <button type="submit" class="btn-submit" form="withdraw_form">Withdraw</button>

        </div>



    </div>

</section>
@endsection