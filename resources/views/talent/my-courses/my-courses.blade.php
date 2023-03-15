@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/my-courses.css')}}">
@endsection

@section('content')
<section class="my-courses">
    <div class="my-courses-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Courses</span> </h1>
            <p>Here you can see your uploaded courses and create your new course.
            </p>
        </div>
        <!-- End Of Title Heading -->
        @if(session('message'))
        <div class="success">
            {{session('message')}}
        </div>
        @endif

        <!-- Create Course Btn -->
        <div class="create-new-course-btn">
            <a href="/view/create-new-course">
                Create New Course
            </a>
        </div>
        <!-- Create Course Btn -->

        <!-- My Courses Content -->
        <div class="my-courses-content-wrapper">
            @if (count($my_courses) == 0)
            <div class="warn" style="margin-top:3rem;margin-left:2rem">
                <h3>No Data</h3>
            </div>
            @else
            @foreach ($my_courses as $my_course)
            {{-- @dd($my_course->category->name) --}}
            <a href="/view/my-courses/my-course-detail-chapter/{{$my_course->id}}" class="course-links">
                <!-- Course Image Wrapper -->
                <div class="course-image-wrapper">
                    <div class="course-image">
                        <img src="{{asset('course/'.$my_course->image)}}" alt="">
                    </div>
                </div>
                <!-- Course Image Wrapper -->

                <!-- Course Text Content -->
                <div class="course-text-content">
                    <h3 class="course-title">{{ $my_course->title }}</h3>
                    <p class="course-description"> {{$my_course->description}}</p>
                    <div class="course-category">
                        <h3>
                            {{$my_course->category->name}}
                        </h3>
                    </div>
                    <h3 class="course-author">{{ $my_course->user->name }}</h3>

                </div>
                <!-- Course Text Content -->
                <form action="/delete/course/{{$my_course->id}}" class="delete_course" id="delete_course">
                    <button type=submit>
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>

            </a>
            @endforeach

            @endif
        </div>

        <!-- My Courses Content -->


    </div>

</section>

@endsection