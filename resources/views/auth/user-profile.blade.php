@extends('layout.main-template')

@section('content')
<div class="profile-page">
    <h1 class="page-title">My Profile</h1>
    <form action="{{ route('user.update') }}" method="post">
        @method('put')
        @csrf
        <div class="profile-content">
            <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" placeholder="Full Name">
        </div>
        <div class="profile-content">
            <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" placeholder="Email">
        </div>
        <div class="profile-content">
            <input type="text" name="dob" id="dob" value="{{ old('dob', Auth::user()->dob) }}" placeholder="dob">
        </div>
        <div class="profile-content">
            <input type="text" name="phone" id="phone" value="{{ old('phone', Auth::user()->phone) }}" placeholder="Phone">
        </div>
        <button class="update-button">Update</button>
    </form>    
</div>
@endsection