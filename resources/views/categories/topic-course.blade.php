@extends('template')
<link rel="stylesheet" href="{{asset('css/categories/topic-course.css')}}">



@section('content')
<section class="topic-course">
    <div class="topic-course-wrapper">
        <div class="topic-course-heading">
            <h1> <a href="/view/topic-course">HTML</a></h1>
            <h2>Courses you can learn and started with</h2>
        </div>
        <div class="topic-course-content">
            <a href="/view/topic-course-detail" class="topic-course-item">
                <div class="topic-course-image">
                    <img src="{{asset('images/course/html.png')}}" alt="">
                </div>
                <div class="topic-course-text-content">
                    <h2 class="topic-course-title">Simple Course HTML</h2>
                    <h3 class="topic-course-category">
                        <ul>
                            <li>Computer</li>
                            <li>Website</li>
                        </ul>
                    </h3>
                    <h3 class="topic-course-author">Udin Petot</h3>
                    <div class="topic-course-rating">
                        <i class="fa-sharp fa-solid fa-star">4.5</i>
                        <h4>( 3.000 reviews )</h4>
                    </div>
                </div>
                <h2 class="topic-course-price">Rp 50.000</h2>
            </a>
            <a href="#d" class="topic-course-item">
                <div class="topic-course-image">
                    <img src="{{asset('images/course/html.png')}}" alt="">
                </div>
                <div class="topic-course-text-content">
                    <h2 class="topic-course-title">HTML Basic</h2>
                    <h3 class="topic-course-category">
                        <ul>
                            <li>Computer</li>
                            <li>Website</li>
                        </ul>
                    </h3>
                    <h3 class="topic-course-author">Udin Petot</h3>
                    <div class="topic-course-rating">
                        <i class="fa-sharp fa-solid fa-star">4.5</i>
                        <h4>( 3.000 reviews )</h4>
                    </div>
                </div>
                <h2 class="topic-course-price">Rp 50.000</h2>
            </a>
            <a href="#d" class="topic-course-item">
                <div class="topic-course-image">
                    <img src="{{asset('images/course/html.png')}}" alt="">
                </div>
                <div class="topic-course-text-content">
                    <h2 class="topic-course-title">HTML Basic Easy Tutorial</h2>
                    <h3 class="topic-course-category">
                        <ul>
                            <li>Computer</li>
                            <li>Website</li>
                        </ul>
                    </h3>
                    <h3 class="topic-course-author">Udin Petot</h3>
                    <div class="topic-course-rating">
                        <i class="fa-sharp fa-solid fa-star">4.5</i>
                        <h4>( 3.000 reviews )</h4>
                    </div>
                </div>
                <h2 class="topic-course-price">Rp 50.000</h2>
            </a>
            <a href="#d" class="topic-course-item">
                <div class="topic-course-image">
                    <img src="{{asset('images/course/html.png')}}" alt="">
                </div>
                <div class="topic-course-text-content">
                    <h2 class="topic-course-title">Professional HTML</h2>
                    <h3 class="topic-course-category">
                        <ul>
                            <li>Computer</li>
                            <li>Website</li>
                        </ul>
                    </h3>
                    <h3 class="topic-course-author">Udin Petot</h3>
                    <div class="topic-course-rating">
                        <i class="fa-sharp fa-solid fa-star">4.5</i>
                        <h4>( 3.000 reviews )</h4>
                    </div>
                </div>
                <h2 class="topic-course-price">Rp 50.000</h2>
            </a>
        </div>
    </div>
</section>




@endsection
