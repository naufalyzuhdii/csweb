@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/search/search.css')}}">
@endsection
@section('content')
<section class="topic-course">
    <div class="topic-course-wrapper">
        <div class="topic-course-heading">
            <h2>Search results for <span>{{$search}}</span> </h2>
        </div>
        <div class="topic-course-content">
            @if(count($courses) == 0)
            <h2>Course not found</h2>
            @elseif(count($courses) > 0)
            @foreach ($courses as $course)
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
            @endforeach
            @endif
        </div>

    </div>
</section>




@endsection