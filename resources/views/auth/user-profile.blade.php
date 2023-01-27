@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/auth/user-profile.css')}}">
@endsection
@section('content')
<section class="profile-page">
    <div class="profile-page-wrapper">
        <!-- Profile Page Heading -->
        <div class="profile-page-heading">
            <h1>My Profile</h1>
        </div>
        <!-- Profile Page Heading -->

        <!-- Profile Page Content -->
        <div class="profile-page-content">
            <form action="{{ route('user.update') }}" method="post">
                @method('put')
                @csrf
                <!-- Profile Picture -->
                <div class="profile-picture">
                    <label>Your Profile Picture : </label>
                    <div class="profile-picture-content">
                        <div class="picture-wrapper">
                            <div class="picture">
                                <img src="/images/course/talent-1.jpg">
                            </div>
                        </div>
                        <div class="file-input">
                            <input type="file" id="file" />
                            <label for="file">choose a file</label>
                        </div>
                    </div>
                </div>
                <!-- Profile Picture -->

                <!-- Profile Text Content -->
                <div class="profile-text-content">
                    <div class="profile-name">
                        <label>Your Name : </label>
                        <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}"
                            placeholder="Full Name">
                    </div>
                    <div class="profile-email">
                        <label>Your Email : </label>
                        <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}"
                            placeholder="Email">
                    </div>
                    <div class="profile-dob">
                        <label> Your Date Of Birth : </label>
                        <input type="date" name="dob" id="dob" value="{{ old('dob', Auth::user()->dob) }}"
                            placeholder="dob" max="2040-01-01" min="1950-01-01">
                    </div>
                    <div class="profile-phone">
                        <label> Your Phone Number : </label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', Auth::user()->phone) }}"
                            placeholder="Phone">
                    </div>
                </div>
                <!-- Profile Text Content -->

                <!-- Update Btn Wrapper -->
                <div class="update-btn-wrapper">
                    <button type="submit" class="update-button">
                        Update Profile
                    </button>
                </div>
                <!-- Update Btn Wrapper -->
            </form>
        </div>
        <!-- Profile Page Content -->
    </div>

</section>
@endsection