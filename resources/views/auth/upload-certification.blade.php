@extends('layout.main-template')
@section('linkCSS')
<link href="{{ asset('css/auth/upload-certification.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section('content')
<section class="upload-certification">
    <div class="upload-certification-wrapper">

        <div class="back-links">
            <a href="/profile/{{auth()->user()->id}}">&#8592; Back</a>
        </div>
        @if(session()->has('message'))
        <div class="success">
            {{session()->get('message')}}
        </div>
        @endif
        <!-- Certification Talent Form -->
        <form action="{{ route('upload.user.certification') }}" method="post" enctype="multipart/form-data"
            id="upload-certification-form">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="upload-certification-content">
                <h3>Upload Certification</h3>
                <span>Once your document has been approved, you can continue to switch role and become talent. </span>
                <input type="file" id="file" name="certification_document">
            </div>
            <embed src="{{ url('certification-document/'.$user->certification_document) }}" height="600px"
                width="500px" />
            @error('certification_document')
            <div class="danger">
                {{$message}}
            </div>
            @enderror
            <!-- Certification Talent -->
            <!-- Update Btn Wrapper -->
            <div class="update-btn-wrapper">
                <button type="submit" class="update-button">
                    Upload
                </button>
            </div>
            <!-- Update Btn Wrapper -->
        </form>
        <!-- Certification Talent Form -->


    </div>
</section>


@endsection