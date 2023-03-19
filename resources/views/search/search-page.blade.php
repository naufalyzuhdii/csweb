@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/search/search.css')}}">
@endsection
@section('content')
<section class="topic-course">
    <div class="topic-course-wrapper">
        <div class="topic-course-heading">
            <h1> <a href="">{{$categories->name}} Courses</a></h1>
            <h2>Related courses you can learn and started with</h2>
        </div>
        <div class="topic-course-content">
            @foreach ($courses as $course)
            @if($course->category->name == $categories->name)
            <a href="/view/course/{{ $course->id }}/topic-course-detail" class="topic-course-item">
                <div class="topic-course-image">
                    <img src="{{ url('course/'. $course->image) }}" alt="">
                </div>
                <div class="topic-course-text-content">
                    <h2 class="topic-course-title">{{ $course->title }}</h2>
                    <p class="topic-course-description">
                        {{$course->description}}
                    </p>
                    <h3 class="topic-course-category">
                        {{ $course->category->name }}
                    </h3>
                    <h3 class="topic-course-author">{{ $course->user->name }}</h3>
                    <div class="topic-course-rating">
                        <i class="fa-sharp fa-solid fa-star">4.5</i>
                        <h4>( 3.000 reviews )</h4>
                    </div>
                </div>
                <?php
                    $course_price = number_format($course->price, 0, ",", ".");
                ?>
                <h2 class="topic-course-price">Rp {{ $course_price }}</h2>
            </a>
            @else
            @endif
            @endforeach
        </div>

    </div>
</section>




@endsection