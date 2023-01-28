@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/my-course-detail-sub-chapter.css')}}">
@endsection

@section('content')
<section class="my-course-detail-sub-chapter">
    <div class="my-course-detail-sub-chapter-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Courses</span> - Course Detail Sub Chapter </h1>
            <p>Here you can upload new video on each chapter.
            </p>
        </div>
        <!-- End Of Title Heading -->

        <!-- Content Wrapper -->
        <div class="my-course-detail-sub-chapter-content-wrapper">
            <form action="/upload-new-video" method="get" id="form-upload-new-video">
                <div class="course-video-title-wrapper">
                    <label for="">Course Video Title</label>
                    <input type="text" name="course-video-title">
                </div>
                <div class="course-video-content-wrapper">
                    <label for="">Course Video Content</label>
                    <div class="file-input">
                        <input type="file" id="file" />
                        <label for="file">choose a file</label>
                    </div>
                </div>

                <div class="button-submit-wrapper">
                    <button type="submit" value="submit" class="submit-btn">
                        Upload
                    </button>
                </div>
            </form>
        </div>
        <!-- Content Wrapper -->
    </div>
</section>

@endsection