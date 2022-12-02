@extends('template')
<link rel="stylesheet" href="{{asset('css/auth/talent-profile-course.css')}}">
@section('content')

<section class="talent-profile-course">
    <div class="talent-profile-course-header">
        <div class="talent-profile-course-header-wrapper">
            <div class="left-content">
                <div class="talent-profile-course-image-wrapper">
                    <div class="talent-profile-course-image">
                        <img src="/images/course/talent-1.jpg">
                    </div>
                </div>
                <div class="talent-profile-course-socials">
                    <a href="#" class="socials-media">
                        <i class="fa-solid fa-link"></i> Website
                    </a>
                    <a href="#" class="socials-media">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                    <a href="#" class="socials-media">
                        <i class="fa-brands fa-linkedin"></i> Linkedin
                    </a>
                    <a href="#" class="socials-media">
                        <i class="fa-brands fa-twitter"></i> Twitter
                    </a>
                </div>
            </div>
            <div class="right-content">
                <div class="talent-profile-course-wrapper">
                    <h1 class="talent-profile-course-name">Udin Petot</h1>
                    <h2 class="talent-profile-course-description">Lecturer at Bina Nusantara Alam Sutera</h2>
                    <div class="talent-profile-course-job">
                        <h2>Talent</h2>
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-circle"></i>Website Development</li>
                            <li><i class="fa-sharp fa-solid fa-circle"></i>Mobile Application</li>
                        </ul>
                    </div>
                </div>
                <div class="talent-profile-course-rating-wrapper">
                    <i class="fa-sharp fa-solid fa-star"> 4.5</i>

                    <div class="talent-profile-course-reviews">
                        <h3>Reviews</h3>
                        <h2>923,200</h2>
                    </div>
                    <div class="talent-profile-course-students">
                        <h3>Total students taught</h3>
                        <h2>100,400</h2>
                    </div>
                </div>
                <div class="talent-profile-course-about">
                    <h2>About me</h2>
                    <p>Udin Petot is the instructor of some of the highest rated programming and technical courses
                        online.
                        He is now the founder of ZTM Academy which is one of the fastest growing education platforms in
                        the world. ZTM Academy is known for having some of the best instructors and success rates for
                        students. His graduates have moved on to work for some of the biggest tech companies around the
                        world like Apple, Google, Tesla, Amazon, JP Morgan, IBM, UNIQLO etc... He has been working as a
                        senior software developer in Silicon Valley and Toronto for many years, and is now taking all
                        that he has learned, to teach programming skills and to help you discover the amazing career
                        opportunities that being a developer allows in life. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="talent-profile-course-content">
        <div class="talent-profile-course-content-wrapper">
            <h1>Taught Courses</h1>
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
    </div>
</section>



@endsection
