@extends('layout.main-template')

@section('linkCSS')
    <link href="{{ asset('css/auth/learner-home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>    
@endsection

@section('content')
{{-- @dd($parentcategories) --}}
{{-- Section Home Guest --}}
<section class="home-guest">
    <div class="home-wrapper">
        <div class="home-banner-text">
            <h2 class="home-text-greeting">Hello Learners!</h2>
            <h1 class="home-banner-heading">
                Welcome to CourseService
            </h1>
            <p class="home-text-paragraph">
                Getting learn and improve your skill with courses we served!
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
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="course-text-content">
                            <h2 class="course-title">HTML Basic</h2>
                            <h3 class="course-category">Computer</h3>
                            <div class="course-author">Udin Petot</div>
                            <div class="course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="course-card-image">
                            <img src="{{asset('images/course/computer.png')}}" alt="">
                        </div>
                        <div class="course-text-content">
                            <h2 class="course-title">Computer Basic</h2>
                            <h3 class="course-category">Computer</h3>
                            <div class="course-author">Udin Petot</div>
                            <div class="course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="course-text-content">
                            <h2 class="course-title">HTML Basic</h2>
                            <h3 class="course-category">Computer</h3>
                            <div class="course-author">Udin Petot</div>
                            <div class="course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="course-text-content">
                            <h2 class="course-title">HTML Basic</h2>
                            <h3 class="course-category">Computer</h3>
                            <div class="course-author">Udin Petot</div>
                            <div class="course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="course-card-image">
                            <img src="{{asset('images/course/computer.png')}}" alt="">
                        </div>
                        <div class="course-text-content">
                            <h2 class="course-title">Computer Basic</h2>
                            <h3 class="course-category">Computer</h3>
                            <div class="course-author">Udin Petot</div>
                            <div class="course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="course-card-image">
                            <img src="{{asset('images/course/computer.png')}}" alt="">
                        </div>
                        <div class="course-text-content">
                            <h2 class="course-title">Computer Basic</h2>
                            <h3 class="course-category">Computer</h3>
                            <div class="course-author">Udin Petot</div>
                            <div class="course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="course-price">Rp 50.000</h2>
                        </div>
                    </a>

                </div>

            </div>
            <div class="swiper-button-next btn-arrow" id="swiper-btn-next"></div>
            <div class="swiper-button-prev btn-arrow" id="swiper-btn-prev"></div>
        </div>
    </div>


</section>
{{-- End Of Section Course Guest --}}

{{-- POPULAR SUB COURSE WRAPPER --}}
<div class="popular-sub-course-wrapper">
    <div class="popular-sub-course-heading">
        <h1 class="popular-sub-course">
            Popular Sub Courses
        </h1>
    </div>
    <div class="popular-sub-course-content">
        <div class="popular-sub-course-item">
            <a href="#" class="popular-sub-course-links">
                Website
            </a>
            <a href="#" class="popular-sub-course-links">
                Mobile Application
            </a>
            <a href="#" class="popular-sub-course-links">
                Engineering
            </a>
            <a href="#" class="popular-sub-course-links">
                Artificiall Intelegenet
            </a>
            <a href="#" class="popular-sub-course-links">
                Trading
            </a>
            <a href="#" class="popular-sub-course-links">
                Robotic
            </a>
            <a href="#" class="popular-sub-course-links">
                Artificiall Intelegenet
            </a>
            <a href="#" class="popular-sub-course-links">
                Trading
            </a>
            <a href="#" class="popular-sub-course-links">
                Robotic
            </a>
            <a href="#" class="popular-sub-course-links">
                Artificiall Intelegenet
            </a>
            <a href="#" class="popular-sub-course-links">
                Trading
            </a>
            <a href="#" class="popular-sub-course-links">
                Robotic
            </a>
        </div>
    </div>
</div>
{{-- POPULAR SUB COURSE WRAPPER --}}

{{-- POPLUAR TALENT WRAPPER --}}
<div class="popular-talent-wrapper">
    <div class="popular-talent-heading">
        <h1 class="popular-talent">
            Popular Talents
        </h1>
    </div>

    <div class="popular-talent-content">
        <div class="popular-talent-cards">
            <div class="swiper talentSwiper">
                <div class="swiper-wrapper" id="talentSwiperWrapper">
                    <a href="/view/talent-profile" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>

                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="/view/talent-profile" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="/view/talent-profile" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="/view/talent-profile" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>

                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="/view/talent-profile" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="/view/talent-profile" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>

                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="popular-talent-card">
                        <div class="popular-talent-card-image">
                            <img src="/images/course/talent-1.jpg">
                        </div>
                        <h2 class="popular-talent-name">Dr Udin Petot</h2>
                        <div class="popular-talent-topic">
                            <ul>
                                <li>HMTL</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <div class="popular-talent-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                        </div>
                        <div class="popular-talent-sum-courses">
                            <h5> 10 <span>courses</span></h5>
                        </div>
                        <div class="popular-talent-sum-tutoring">
                            <h5>15 <span>tutoring</span></h5>
                        </div>
                    </a>

                </div>
                <div class="swiper-pagination" id="swiper_pagination"></div>
            </div>
        </div>
    </div>
</div>
{{-- POPLUAR TALENT WRAPPER --}}



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


    var swiper = new Swiper(".talentSwiper", {
        slidesPerView: 4,
        spaceBetween: 5,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>


@endsection
