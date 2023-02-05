@extends('layout.main-template')
@section('linkCSS')
<link href="{{ asset('css/admin/view-certification-document.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section('content')

<section class="view-certification-document">
    <div class="view-certification-document-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>Admin</span> - Certification Talent Approval - Edit User </h1>
        </div>
        <!-- End Of Title Heading -->
        @if(session()->has('message'))
        <div class="success">
            {{session()->get('message')}}
        </div>
        @endif

        <div class="back-links">
            <a href="/back" class="back-links">&#8592; Back</a>
        </div>

        <!-- Certification Status Form -->
        <form action="{{ route('update.certification-status') }}" method="post" enctype="multipart/form-data"
            id="update-certification-status">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="upload-certification-content">
                <h3 for="certification_status">Update Certification Status</h3>
                <select id="certification_status" name="certification_status">
                    <option selected hidden>{{$user->certification_status}}</option>
                    <option value="invalid">invalid</option>
                    <option value="valid">valid</option>
                </select>
            </div>
            <embed src="{{ url('storage/certification-document/'.$user->certification_document) }}" height="600px"
                width="500px" />

            @error('certification_status')
            <div class="danger">
                {{$message}}
            </div>
            @enderror

            <!-- Update Btn Wrapper -->
            <div class="update-btn-wrapper">
                <button type="submit" class="update-button">
                    Update
                </button>
            </div>
            <!-- Update Btn Wrapper -->
        </form>
        <!-- Certification Status Form  -->
    </div>
</section>


@endsection