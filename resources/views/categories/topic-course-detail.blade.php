@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/categories/topic-course-detail.css')}}">
@endsection
@section('content')
<section class="topic-course-detail">
    <div class="topic-course-detail-wrapper">
        {{-- TOPIC COURSE DETAIL HEADER --}}
        <div class="topic-course-detail-header">
            <div class="header-left">
                <div class="topic-course-detail-image">
                    <img src="{{ Storage::url($course->image) }}" alt="">
                </div>
                <div class="topic-course-detail-heading-content">
                    <h1 class="topic-course-detail-heading">{{ $course->title }}</h1>
                    <h2 class="topic-course-detail-description">
                        {{ $course->description }}
                    </h2>
                    <h3 class="topic-course-detail-category">
                        <ul>
                            <li>{{ $course->category->name }}</li>

                        </ul>
                    </h3>
                    <h3 class="topic-course-detail-author">Publish by <a href="/view/talent-profile">{{ $course->author }}</a></h3>
                    <div class="topic-course-detail-rating">
                        <i class="fa-sharp fa-solid fa-star">4.5</i>
                        <h4>( 3.000 reviews )</h4>
                    </div>
                    <h2 class="topic-course-detail-price">Rp {{ $course->price }}</h2>
                </div>
            </div>
            <div class="header-right">
                <a href="#" class="add-to-cart-btn">
                    <h2>Add to cart</h2>
                </a>
                <a href="#" class="buy-btn">
                    <h2>Buy Course Now</h2>
                </a>
            </div>

        </div>
        {{-- TOPIC COURSE DETAIL HEADER --}}

        {{-- TOPIC COURSE DETAIL CONTENT --}}
        <div class="topic-course-detail-content">
            <div class="topic-course-detail-content-description">
                <h2>Description</h2>
                <p>Have you ever wanted to learn how to code but didn't know where to start? This is a fantastic course
                    to
                    start. Not only is JavaScript easy to learn but it is in demand? If you take this course you will
                    start
                    the fantastic process of learning to code which will lead you to a better life. Coding is one of the
                    most in demand skills if you can code you have a job. </p>
            </div>
            <div class="topic-course-detail-content-goals">
                <h2>What will you get</h2>
                <ul>
                    <li><i class="fa-sharp fa-solid fa-circle"></i> Learn basic of
                        HTML</li>
                    <li><i class="fa-sharp fa-solid fa-circle"></i>E-Certificate once you have done all the chapters of
                        course
                    </li>
                    <li><i class="fa-sharp fa-solid fa-circle"></i> Increase your skills especially in coding with HTML
                        and CSS
                        HTML</li>
                    <li><i class="fa-sharp fa-solid fa-circle"></i>E-Certificate once you have done all the chapters of
                        course
                    </li>
                </ul>

            </div>

            <div class="topic-course-detail-content-video">
                <h2>Course content you can learn</h2>
                <div class="content-video-wrapper">
                    <div class="content-video-chapter">
                        <div class="content-video-chapter-title">
                            <h2><i class="fa-sharp fa-solid fa-play" id="arrow-chapter"></i>Basic of HTML</h2>
                            <h3>Total course time : 5 hour</h3>
                        </div>
                        <div class="content-video-chapter-list">
                            <ul>
                                <li><a href="#introcourse"><i class="fa-solid fa-circle-play"></i> Introduction to
                                        course</a>
                                    <h3>2 hour</h3>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-circle-play"></i> What is HTML?</a>
                                    <h3>2 hour</h3>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-circle-play"></i> HTML Structured</a>
                                    <h3>1 hour</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-video-chapter">
                        <div class="content-video-chapter-title">
                            <h2><i class="fa-sharp fa-solid fa-play" id="arrow-chapter"></i>Basic of CSS</h2>
                            <h3>Total course time : 3 hour</h3>
                        </div>
                        <div class="content-video-chapter-list">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa-solid fa-circle-play"></i> Introduction to course</a>
                                    <h3>1 hour</h3>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-circle-play"></i> What is CSS?</a>
                                    <h3>1 hour</h3>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-circle-play"></i> CSS Structured</a>
                                    <h3>1 hour</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-video-chapter">
                        <div class="content-video-chapter-title">
                            <h2><i class="fa-sharp fa-solid fa-play" id="arrow-chapter"></i>Implementation HTML</h2>
                            <h3>Total course time : 2 hour</h3>
                        </div>
                        <div class="content-video-chapter-list">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-circle-play"></i> Create Table</a>
                                    <h3>1 hour</h3>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-circle-play"></i> Div Tag</a>
                                    <h3>30 min</h3>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-circle-play"></i> Links</a>
                                    <h3>30 min</h3>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- TOPIC COURSE DETAIL CONTENT --}}

        {{-- TOPIC COURSE DETAIL FORUM --}}
        <div class="topic-course-detail-forum">
            <div class="topic-course-detail-forum-wrapper">
                <div class="forum-header">
                    <h1>Forum</h1>
                </div>
                <div class="ask-forum">
                    <div class="profile-image-wrapper">
                        <div class="profile-image">
                            <img src="{{asset('images/thread/jason.jpg')}}">
                        </div>
                        <div class="profile-askers-name">
                            <h2>Udin Sudrajat</h2>
                        </div>
                    </div>
                    <form action="#" class="forum-form">
                        <div class="ask-forum-title">
                            <label for="forum-title">Title</label>
                            <input type="text" id="forum-title-content" name="title" placeholder="Type your title">
                        </div>
                        <div class="ask-forum-description">
                            <label for="forum-description">Description</label>
                            <textarea id="ask-forum-description" name="forum-description-content"
                                placeholder="Type your description...">
                            </textarea>
                        </div>
                        <button class="post-btn">
                            Post
                        </button>
                    </form>
                </div>
                <div class="forum-posts">
                    <div class="forum">
                        <div class="forum-images-wrapper">
                            <div class="forum-images">
                                <img src="{{asset('images/course/talent-1.jpg')}}">
                            </div>
                        </div>
                        <div class="forum-content-wrapper">
                            <div class="forum-askers">
                                <h2>Jason Petot</h2>
                            </div>
                            <div class="forum-title">
                                <h2>Mau tanya tentang HMTL ?</h2>
                            </div>
                            <div class="forum-description">
                                <p>Saya bingung niehhhhh aduhhh</p>
                            </div>
                            <div class="forum-reaction">
                                <div class="replies-wrapper">
                                    <i class="fa-solid fa-reply"></i>
                                    <span>10</span>
                                    <h4>Replies</h4>
                                </div>
                                <div class="viewer-wrapper">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>400</span>
                                    <h4>Viewers</h4>
                                </div>
                                <div class="time-wrapper">
                                    <h4>30m ago</h4>
                                </div>
                            </div>
                        </div>
                        <div class="forum-reply-wrapper">
                            <a href="/view/forum-detail-reply" class="reply-btn">
                                <h2>Reply</h2>
                            </a>
                        </div>
                    </div>
                    <div class="forum">
                        <div class="forum-images-wrapper">
                            <div class="forum-images">
                                <img src="{{asset('images/thread/jason.jpg')}}">
                            </div>
                        </div>
                        <div class="forum-content-wrapper">
                            <div class="forum-askers">
                                <h2>Jason Petot</h2>
                            </div>
                            <div class="forum-title">
                                <h2>Mau tanya tentang HMTL ?</h2>
                            </div>
                            <div class="forum-description">
                                <p>Saya bingung niehhhhh aduhhh</p>
                            </div>
                            <div class="forum-reaction">
                                <div class="replies-wrapper">
                                    <i class="fa-solid fa-reply"></i>
                                    <span>10</span>
                                    <h4>Replies</h4>
                                </div>
                                <div class="viewer-wrapper">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>400</span>
                                    <h4>Viewers</h4>
                                </div>
                                <div class="time-wrapper">
                                    <h4>30m ago</h4>
                                </div>
                            </div>
                        </div>
                        <div class="forum-reply-wrapper">
                            <a href="#" class="reply-btn">
                                <h2>Reply</h2>
                            </a>
                        </div>
                    </div>
                    <div class="forum">
                        <div class="forum-images-wrapper">
                            <div class="forum-images">
                                <img src="{{asset('images/thread/jason.jpg')}}">
                            </div>
                        </div>
                        <div class="forum-content-wrapper">
                            <div class="forum-askers">
                                <h2>Jason Petot</h2>
                            </div>
                            <div class="forum-title">
                                <h2>Mau tanya tentang HMTL ?</h2>
                            </div>
                            <div class="forum-description">
                                <p>Saya bingung niehhhhh aduhhh</p>
                            </div>
                            <div class="forum-reaction">
                                <div class="replies-wrapper">
                                    <i class="fa-solid fa-reply"></i>
                                    <span>10</span>
                                    <h4>Replies</h4>
                                </div>
                                <div class="viewer-wrapper">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>400</span>
                                    <h4>Viewers</h4>
                                </div>
                                <div class="time-wrapper">
                                    <h4>30m ago</h4>
                                </div>
                            </div>
                        </div>
                        <div class="forum-reply-wrapper">
                            <a href="#" class="reply-btn">
                                <h2>Reply</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- TOPIC COURSE DETAIL FORUM --}}


        {{-- ANOTHER TOPIC COURSE --}}
        <div class="another-topic-course">
            <div class="another-topic-course-header">
                <h2>Another topic you can learn</h2>
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
        {{-- ANOTHER TOPIC COURSE --}}
    </div>
</section>

<script>
var chapter_title = document.querySelectorAll(".content-video-chapter-title");
chapter_title.forEach((chapter_title) => {
    chapter_title.addEventListener("click", () => {
        chapter_title.classList.toggle("change");
        const parent = chapter_title.parentNode;
        parent.classList.toggle("active");

    });
});
</script>




@endsection