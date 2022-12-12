@extends('template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/auth/signup.css') }}">
<section class="signup">
    <div class="signup-wrapper">
        <div class="signup-header">
            <div class="logo-signup">
                <img src="/images/header/logo-blue.png">
            </div>
            <div class="text-heading">
                <h1>Welcome to <br> <span>CourseService</span></h1>
            </div>
        </div>
        <div class="signup-content">
            <div class="signup-text">
                <h3>Sign Up</h3>
            </div>
            <form action="/signup" class="signup-form" method="POST">
                @csrf
                <div class="signup-content">
                    <div class="name-signup auth">
                        <label for="Name">Your Name</label>
                        <input type="text" name="name">
                    </div>

                    <div class="dob auth">
                        <label for="DOB">Date Of Birth</label>
                        <input type="date" name="dob">
                    </div>

                    <div class="phone auth">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone">
                    </div>

                    <div class="email-signup auth">
                        <label for="Email">
                            Email
                        </label>
                        <input type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="password-signup auth">
                        <label for="Password">Password</label>
                        <div class="password-input">
                            <input type="password" id="mypassword" name="password" placeholder="Enter your password">
                            <i class="fa-regular fa-eye-slash" id="eye"></i>
                        </div>
                    </div>

                    <div class="signup-btn">
                        <button type="submit">Sign Up</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
</section>

<script src="{{ asset('js/script.js') }}">
</script>




@endsection
