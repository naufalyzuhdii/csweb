@extends('template')
<link href="{{ asset('css/auth/guest.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@section('content')

{{-- Section Home Guest --}}
<section class="home-guest">
    <div class="home-wrapper">
        <div class="home-banner-text">
            <h2 class="home-text-greeting">Hello!</h2>
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

{{-- Section Explanation --}}
<section class="explanation">
    <div class="explanation-wrapper">
        <div class="explanation-header">
            <h1 class="explanation-heading">What is CourseService ?</h1>
            <h3 class="explanation-description">CourseService is a e-learning website that will help you to
                solve courses that you want. You
                can
                gain information and taught
                from courses and tutors we served.
                <br>
                In CourseService website, you will have two roles, that you can choose one of them, or both.
            </h3>
        </div>
        <div class="role-wrapper">
            <div class="card-role">
                <div class="card-role-heading">
                    <div class="icon-card">
                        <img src="/images/course/book-learner.png">
                    </div>
                    <h2>Learner</h2>
                </div>
                <ul class="card-list">
                    <li><i class="fa-sharp fa-solid fa-circle"></i>If you are
                        student, or looking for learning materials,
                        you can <b>buy courses.</b> </li>

                    <li><i class="fa-sharp fa-solid fa-circle"></i>If
                        you had difficulty of understanding materials, you can request tutor to teach you by
                        uploading
                        post in thread menu.
                    </li>
                </ul>
            </div>
            <div class="card-role">
                <div class="card-role-heading">
                    <div class="icon-card">
                        <img src="/images/course/service-talent.png">
                    </div>
                    <h2>Talent</h2>
                </div>
                <ul class="card-list">
                    <li><i class="fa-sharp fa-solid fa-circle"></i>If you have good competence regarding the
                        learning
                        material, you can <b>sell your
                            service</b>
                        in courses form.</li>
                    <li><i class="fa-sharp fa-solid fa-circle"></i>You can <b>accept</b> customer's course
                        request to gain your credibility and income.
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
{{-- End Of Section Explanation --}}

{{-- Section Categories --}}
<section class="categories">
    <div class="categories-wrapper">
        <div class="categories-header">
            <h1 class="categories-heading">Categories</h1>
            <h3 class="categories-text">Which one is your favorite subjects?</h3>
        </div>

        <div class="categories-cards">
            <a href="#tech" class="categories-card">
                <div class="categories-bg"
                    style="background: url('/images/categories/technology.png') center;object-fit:cover;">
                </div>
                <div class="categories-content">
                    <div class="categories-icon">
                        <img src="/images/categories/technology-icon.png" alt="">
                    </div>
                    <div class="categories-title">Technology</div>
                </div>
            </a>
            <a href="#ee" class="categories-card">
                <div class="categories-bg"
                    style="background: url('/images/categories/math.png') center;object-fit:cover;">
                </div>
                <div class="categories-content">
                    <div class="categories-icon">
                        <img src="/images/categories/math-icon.png" alt="">
                    </div>
                    <div class="categories-title">Math</div>
                </div>
            </a>

            <a href="#ee" class="categories-card">
                <div class="categories-bg"
                    style="background: url('/images/categories/languages.png') center;object-fit:cover;">
                </div>
                <div class="categories-content">
                    <div class="categories-icon">
                        <img src="/images/categories/language-icon.png" alt="">
                    </div>
                    <div class="categories-title">Language</div>
                </div>
            </a>
            <a href="#ee" class="categories-card">
                <div class="categories-bg"
                    style="background: url('/images/categories/sciences.png') center;object-fit:cover;">
                </div>
                <div class="categories-content">
                    <div class="categories-icon">
                        <img src="/images/categories/science-icon.png" alt="">
                    </div>
                    <div class="categories-title">Science</div>
                </div>

            </a>
        </div>
    </div>

</section>
{{-- End Of Section Categories --}}

{{-- Section Ask Need --}}
<section class="ask-need">
    <div class="ask-need-bg">
        <div class="ask-need-wrapper">
            <div class="ask-need-content">
                <h1 class="text-content">
                    Ask for your needs to professionals.
                </h1>
                <p class="paragraph-content">
                    Request Now!
                </p>

                <a href="/view/signin_page" class="ask-need-btn-link">
                    <div class="ask-need-btn">
                        Get Started
                    </div>
                </a>


            </div>
        </div>
    </div>
</section>
{{-- End Of Section Ask Need --}}


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
