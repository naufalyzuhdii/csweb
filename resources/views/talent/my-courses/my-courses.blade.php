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

        <!-- Create Course Btn -->
        <div class="create-new-course-btn">
            <a href="/view/create-new-course">
                Create New Course
            </a>
        </div>
        <!-- Create Course Btn -->

        <!-- My Courses Content -->
        @if (count($my_courses) > 0)
        @foreach ($my_courses as $my_course)
        <div class="my-courses-content-wrapper">
            <a href="/view/my-courses/my-course-detail-chapter" class="course-links">
                <!-- Course Image Wrapper -->
                <div class="course-image-wrapper">
                    <div class="course-image">
                        <img src="{{ Storage::url($my_course->image) }}" alt="">
                    </div>
                </div>
                <!-- Course Image Wrapper -->

                <!-- Course Text Content -->
                <div class="course-text-content">
                    <h2 class="course-title">{{ $my_course->title }}</h2>
                    <h3 class="course-category">
                        <ul>
                            {{-- <li>Computer</li> --}}
                        </ul>
                    </h3>
                    <h3 class="course-author">{{ $my_course->user->name }}</h3>
                </div>
                <!-- Course Text Content -->
            </a>
        </div>
        @endforeach
        @endif
        <!-- My Courses Content -->


    </div>

</section>

@endsection