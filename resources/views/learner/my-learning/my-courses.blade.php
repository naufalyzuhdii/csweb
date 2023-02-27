@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-learning/my-courses.css')}}">
@endsection

@section('content')
<section class="my-courses">
    <div class="my-courses-wrapper">
        <!-- Course Header -->
        <div class="my-courses-header">
            <h1> <span>My Progress</span> - Courses </h1>
            <p>Here is your courses progress. You can see which courses you learned or not</p>
        </div>
        <!-- Course Header -->

        <!-- Course Content Wrapper -->
        <div class="my-courses-content-wrapper">

            @foreach ($my_learning as $ml)
            {{-- @foreach ($my_learning as $ml) --}}
            {{-- @if ($courses->id == $my_learning->id) --}}
            {{-- @foreach ($courses as $course)
                    @if ($course->id == $my_learning) --}}

            <a href="/view/my-learning/course-learned-detail/{{$ml->course_id}}" class="course-links">
                <!-- Course Image Wrapper -->
                <div class="course-image-wrapper">
                    <div class="course-image">
                        <img src="{{ url('course/'. $ml->course->image)}}" alt="">
                    </div>
                </div>
                <!-- Course Image Wrapper -->

                <!-- Course Text Content -->
                <div class="course-text-content">
                    <h2 class="course-title">{{$ml->course->title}}</h2>
                    <h3 class="course-category">
                        {{$ml->course->category->name}}
                    </h3>
                    <h3 class="course-author">
                        {{$ml->course->user->name}}
                    </h3>
                </div>
                <!-- Course Text Content -->
            </a>
            {{-- @endif --}}


            {{-- @endforeach  --}}
            {{-- @endif --}}

            {{-- @endforeach --}}

            @endforeach


        </div>
        <!-- Course Content Wrapper -->
    </div>
</section>

@endsection