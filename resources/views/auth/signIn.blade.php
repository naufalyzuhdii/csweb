@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/auth/signin.css')}}">
@endsection

@section('content')
<section class="signin">
    <div class="signin-wrapper">
        <div class="signin-header">
            <div class="logo-signin">
                <img src="/images/header/logo-blue.png">
            </div>
            <div class="text-heading">
                <h1>Welcome to <br> <span>CourseService</span></h1>
            </div>
        </div>
        <div class="signin-content">
            <div class="signin-text">
                <h3>Sign In</h3>
            </div>

            <!-- Flash message untuk berhasil membuat account -->
            @if(session()->has('success'))
            <div class="success">
                {{session()->get('success')}}
            </div>
            @endif
            <form action="/signin" class="signin-form" method="POST">
                @csrf
                <div class="email-signin auth">
                    <label for="Email">
                        Email
                    </label>
                    <input type="email" name="email" placeholder="Enter your email"
                        value="{{ Cookie::get('mycookie') != null ? Cookie::get('mycookie') : '' }}">
                </div>
                <div class="password-signin auth">
                    <label for="Password">Password</label>
                    <div class="password-input">
                        <input type="password" id="mypassword" name="password" placeholder="Enter your password">
                        <i class="fa-regular fa-eye-slash" id="eye"></i>
                    </div>
                </div>
                <div class="rememberme-group">
                    <div class="rememberme">
                        <input type="checkbox" name="rememberme" id="remember"
                            {{ Cookie::get('mycookie') != null ? 'checked' : '' }} checked="checked">
                        <label for="RememberMe">Remember Me</label>
                    </div>
                    <a href="#" class="forgot-password-link">Forgot Password? </a>
                </div>

                <div class="signin-btn">
                    <button type="submit">Sign In</button>
                </div>

                <p>Don't have an account? <a href="/view/signup_page" class="signup-link"> Sign Up</a></p>

            </form>
        </div>

    </div>
</section>

<script src="{{ asset('js/script.js') }}">
</script>

@endsection