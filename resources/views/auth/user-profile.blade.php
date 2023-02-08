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

        @if(session()->has('message'))
        <div class="success">
            {{session()->get('message')}}
        </div>
        @endif

        @if(Auth::user()->role == "admin")
        <a href="/back" class="back-links">Back</a>
        @else

        @endif

        <!-- Profile Page Content -->
        <div class="profile-page-content">
            <!-- Form User Update -->
            <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data" id="form-user-update">
                @method('put')
                @csrf
                <!-- Profile Picture -->
                <div class="profile-picture">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <label>Your Profile Picture : </label>
                    <div class="profile-picture-content">
                        <div class="picture-wrapper">
                            @if($user->image == 'no picture')
                            <div class="picture">
                                <img src="{{ url('profile/account.png') }}" alt="">
                            </div>
                            @else
                            <div class="picture">
                                <img src="{{ url('profile/'.$user->image) }}" />
                            </div>
                            @endif
                        </div>
                        <div class="file-input">
                            <input type="file" id="file" name="image">
                        </div>
                    </div>
                    @error('image')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <!-- Profile Picture -->

                <!-- Profile Text Content -->
                <div class="profile-text-content">
                    <div class="profile-name">
                        <label>Your Name : </label>
                        <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}"
                            placeholder="Full Name">

                        @error('name')
                        <div class="danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="profile-email">
                        <label>Your Email : </label>
                        <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}"
                            placeholder="Email">

                        @error('email')
                        <div class="danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="profile-dob">
                        <label> Your Date Of Birth : </label>
                        <input type="date" name="dob" id="dob" value="{{ old('dob', Auth::user()->dob) }}"
                            placeholder="dob" max="2040-01-01" min="1950-01-01">
                        @error('date')
                        <div class="danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="profile-phone">
                        <label> Your Phone Number : </label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', Auth::user()->phone) }}"
                            placeholder="Phone">
                        @error('phone')
                        <div class="danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <!-- Profile Text Content -->

                <div class="upload-certification">
                    <h3>Upload Certification</h3>

                    @if(Auth::user()->certification_document == '-' && Auth::user()->certification_status == 'none')
                    <label>
                        <span>Uploading certification as a proof that you are competent to be a talent.
                            Once you upload, you can wait for a day to get the result review.
                        </span>
                        <h3><a href="/view/upload-certification-page/{{$user->id}}">Upload certification</a></h3>
                    </label>
                    @elseif(Auth::user()->certification_document != '-' && Auth::user()->certification_status ==
                    'invalid')
                    <label>
                        <span>Your uploaded document is invalid. Please re-upload the right one!
                        </span>
                        <h3><a href="/view/upload-certification-page/{{$user->id}}">Upload certification</a></h3>
                    </label>
                    @elseif((Auth::user()->certification_document != '-') && (Auth::user()->certification_status ==
                    'none'))
                    <label>
                        <span>Your certification document has been uploaded. Please wait for the review!
                        </span>
                    </label>
                    @elseif((Auth::user()->certification_status ==
                    'valid'))
                    <label>
                        <span style="color:green;font-size:1.6rem">Your certification is qualified and approved!
                        </span>
                    </label>
                    @endif

                </div>
            </form>
            <!-- Form User Update -->

            <!-- Update Btn Wrapper -->
            <div class="update-btn-wrapper">
                <button type="submit" class="update-button"
                    onclick="document.getElementById('form-user-update').submit()">
                    Update Profile
                </button>
            </div>
            <!-- Update Btn Wrapper -->
        </div>
        <!-- Profile Page Content -->
    </div>

</section>
@endsection