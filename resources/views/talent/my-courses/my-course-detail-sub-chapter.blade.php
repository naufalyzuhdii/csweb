@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/my-course-detail-sub-chapter.css')}}">
@endsection

@section('content')
<section class="my-course-detail-sub-chapter">
    <div class="my-course-detail-sub-chapter-wrapper">
        <div class="links">
            <h3>
                <a href="/view/my-courses">My Courses</a>
                <span>></span>
                <a href="/view/my-courses/my-course-detail-chapter/{{$my_course->id}}"> Courses Chapter</a>
            </h3>
        </div>
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Courses</span> - Course Detail Sub Chapter </h1>
            <p>Here you can upload new video on each chapter.
            </p>
        </div>
        <!-- End Of Title Heading -->
        @if(session('message'))
        <div class="success">
            {{session('message')}}
        </div>
        @endif

        <!-- Content Form Wrapper -->
        <div class="my-course-detail-sub-chapter-content-wrapper">
            <form action="/upload-new-video" method="post" id="form-upload-new-video" enctype="multipart/form-data">
                @csrf
                <input type="text" name="course_detail_id" value="{{$detail_chapter->id}}" hidden>
                <div class="course-video-title-wrapper">
                    <label for="">Course Detail Sub Chapter - Video Title</label>
                    <input type="text" name="video_title" placeholder="example: 1. What is  ... ?">
                </div>
                @error('video_title')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-video-content-wrapper">
                    <label for="">Course Detail Sub Chapter - Video Content</label>
                    <div class="file-input">
                        <input type="file" id="file" name="video">
                        <label for="file">choose a file</label>
                    </div>
                </div>
                @error('video')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror

                <div class="button-submit-wrapper">
                    <button type="submit" value="submit" class="submit-btn">
                        Upload
                    </button>
                </div>
            </form>
        </div>
        <!-- Content Form Wrapper -->

        <div class="posted-video-links-wrapper">
            @if(count($video) == 0)
            <div class="warn">
                <h3>Your course has not course detail sub chapter yet. Please upload one.</h3>
            </div>
            @else
            @foreach($video as $vid)
            <a href="/my_course/{{$my_course->id}}/course_detail/{{$detail_chapter->id}}/showmateri/{{$vid->id}}"
                class="links-materi">
                <div class="posted-video-links">
                    <div class="posted-video-title">
                        <h3> {{$vid->video_title}}</h3>
                    </div>
                    <a href="/delete-video/{{$vid->id}}" class="delete-video"><i class="fa-solid fa-trash"></i></a>
                </div>
            </a>
            @endforeach
            @endif
        </div>


    </div>
</section>

@endsection