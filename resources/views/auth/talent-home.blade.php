@extends('layout.main-template')
@section('linkCSS')
<link href="{{ asset('css/auth/talent-home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endsection

@section('content')
{{-- Section Home Guest --}}
<section class="home-guest">
    <div class="home-wrapper">
        <div class="home-banner-text">
            <h2 class="home-text-greeting">Hello Talents!</h2>
            <h1 class="home-banner-heading">
                Welcome to CourseService
            </h1>
            <p class="home-text-paragraph">
                Improve and increase your income by selling your course and skills to learners!
            </p>
        </div>
    </div>
</section>
{{-- End Of Section Home Guest --}}

{{-- Section Course Guest --}}
<section class="course-guest">
    <div class="course-wrapper">
        <div class="coure-guest-header">
            <h1 class="course-guest-heading">
                Get your passion and knowledge here!
            </h1>
            <p class="course-guest-paragraph">
                Let's learn with us!
            </p>
        </div>
        <div class="course-content">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper" id="swiperWrapper">
                    @foreach($course as $course)
                    @if($course->status == 'valid')
                    <a href="/view/course/{{$course->id}}/topic-course-detail" class="swiper-slide" id="card-slide">
                        <div class="course-card-image">
                            <img src="{{asset('course/'.$course->image)}}" alt="">
                        </div>
                        <div class="course-text-content">
                            <h2 class="course-title">{{$course->title}}</h2>
                            <h3 class="course-category">{{$course->category->name}}</h3>
                            <div class="course-author">{{$course->user->name}}</div>
                            <div class="course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <?php
                                $course_price = number_format($course->price, 0, ",", ".");
                            ?>
                            <h2 class="course-price">Rp {{$course_price}}</h2>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next btn-arrow" id="swiper-btn-next"></div>
            <div class="swiper-button-prev btn-arrow" id="swiper-btn-prev"></div>
        </div>
    </div>
</section>
{{-- End Of Section Course Guest --}}

{{-- POPULAR SUB COURSE WRAPPER --}}
<section class="popular-sub-course-wrapper">
    <div class="popular-sub-course-heading">
        <h1 class="popular-sub-course">
            Popular Categories
        </h1>
    </div>
    <div class="popular-sub-course-content">
        <div class="popular-sub-course-item">
            @foreach($categories as $c)
            <a href="/categories/{{$c->id}}" class="popular-sub-course-links">
                {{$c->name}}
            </a>
            @endforeach
        </div>
    </div>
</section>
{{-- POPULAR SUB COURSE WRAPPER --}}




<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>



@endsection