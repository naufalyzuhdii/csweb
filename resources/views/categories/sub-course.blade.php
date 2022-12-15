@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/categories/sub-course.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

@endsection
@section('content')

<section class="sub-course">
    <div class="sub-course-wrapper">
        <div class="sub-course-heading">
            <h1><a href="/view/course">Technology</a> &#x3e; <a href="/view/sub-course">Website</a></h1>
            <h2>Related courses to get you started</h2>
        </div>
        <div class="sub-course-content">
            <div class="swiper mySubCourseSwiper">
                <div class="swiper-wrapper" id="swiperSubCourseWrapper">
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="card-slide">
                        <div class="sub-course-card-image">
                            <img src="{{asset('images/course/html.png')}}" alt="">
                        </div>
                        <div class="sub-course-text-content">
                            <h2 class="sub-course-title">HTML Basic</h2>
                            <h3 class="sub-course-category">
                                <ul>
                                    <li>Computer</li>
                                    <li>Website</li>
                                </ul>
                            </h3>
                            <h3 class="sub-course-author">Udin Petot</h3>
                            <div class="sub-course-rating">
                                <i class="fa-sharp fa-solid fa-star">4.5</i>
                                <h4>( 3.000 reviews )</h4>
                            </div>
                            <h2 class="sub-course-price">Rp 50.000</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-button-next btn-arrow" id="swiper-btn-next"></div>
            <div class="swiper-button-prev btn-arrow" id="swiper-btn-prev"></div>
        </div>


    </div>


    <div class="popular-topic-wrapper">
        <div class="popular-topic-heading">
            <h1 class="popular-topic">
                Popular Topics
            </h1>
        </div>
        <div class="popular-topic-content">
            <div class="popular-topic-item">
                <a href="/view/topic-course" class="popular-topic-links">
                    HTML
                </a>
                <a href="#" class="popular-topic-links">
                    CSS
                </a>
                <a href="#" class="popular-topic-links">
                    Javascript
                </a>
                <a href="#" class="popular-topic-links">
                    React Js
                </a>
                <a href="#" class="popular-topic-links">
                    SCSS
                </a>
                <a href="#" class="popular-topic-links">
                    SwiperJS
                </a>
                <a href="#" class="popular-topic-links">
                    HTML
                </a>
                <a href="#" class="popular-topic-links">
                    CSS
                </a>
                <a href="#" class="popular-topic-links">
                    Javascript
                </a>
                <a href="#" class="popular-topic-links">
                    React Js
                </a>
                <a href="#" class="popular-topic-links">
                    SCSS
                </a>
                <a href="#" class="popular-topic-links">
                    SwiperJS
                </a>
            </div>
        </div>
    </div>


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
</section>


<script>
var swiper = new Swiper(".mySubCourseSwiper", {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: true,
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

{{-- <script src="{{asset('js/script.js')}}"></script> --}}

@endsection