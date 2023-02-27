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
                    <img src="{{ url('course/'. $course->image) }}" alt="">
                </div>
                <div class="topic-course-detail-heading-content">
                    <h1 class="topic-course-detail-heading">{{ $course->title }}</h1>
                    <h2 class="topic-course-detail-description">
                    </h2>
                    <h3 class="topic-course-detail-category">
                        <ul>
                            <!-- <li>{{ $course->category->name }}</li> -->

                        </ul>
                    </h3>
                    <h3 class="topic-course-detail-author">Publish by {{ $course->user->name }}</h3>
                    <div class="topic-course-detail-rating">
                        <i class="fa-sharp fa-solid fa-star">4.5</i>
                        <h4>( 3.000 reviews )</h4>
                    </div>
                    <?php
                        $course_price = number_format($course->price, 0, ",", ".");
                    ?>
                    <h2 class="topic-course-detail-price">Rp {{ $course_price }}</h2>
                </div>
            </div>
            <div class="header-right">
                @if(auth()->user()->role == 'learner')
                <a href="{{ route('addtocart', ['id' => $course->id]) }}" class="add-to-cart-btn">
                    <h2>Add to cart</h2>
                </a>
                <!-- <a href="#" class="buy-btn">
                    <h2>Buy Course Now</h2>
                </a> -->
                @else

                @endif
            </div>

        </div>
        {{-- TOPIC COURSE DETAIL HEADER --}}

        {{-- TOPIC COURSE DETAIL CONTENT --}}
        <div class="topic-course-detail-content">
            <div class="topic-course-detail-content-description">
                <h2>Description</h2>
                <p> {{ $course->description }}
                </p>
            </div>
            <!-- <div class="topic-course-detail-content-goals">
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

            </div> -->

            <div class="topic-course-detail-content-video">
                <h2>Course content you can learn</h2>
                <div class="content-video-wrapper">
                    @foreach($courseDetail as $courseDetail)
                    <div class="content-video-chapter">
                        <div class="content-video-chapter-title">
                            <h2><i class="fa-sharp fa-solid fa-play" id="arrow-chapter"></i>
                                {{$courseDetail->chapter}}
                            </h2>
                            <h3>-</h3>
                        </div>
                        @foreach($courseDetail->course_video as $video)
                        <div class="content-video-chapter-list">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa-solid fa-circle-play"></i>
                                        {{$video->video_title}}
                                    </a>
                                    <h3>-</h3>
                                </li>

                            </ul>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- TOPIC COURSE DETAIL CONTENT --}}

        {{-- TOPIC COURSE DETAIL FORUM --}}
        <!-- <div class="topic-course-detail-forum">
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
        </div> -->
        {{-- TOPIC COURSE DETAIL FORUM --}}


        {{-- ANOTHER TOPIC COURSE --}}
        <div class="another-topic-course">
            <div class="another-topic-course-header">
                <h2>Another topic you can learn</h2>
            </div>
            <div class="topic-course-content">
                @foreach($courses as $courses)
                <a href="/view/topic-course-detail/" class="topic-course-item">
                    <div class="topic-course-image">
                        <img src="{{asset('course/'.$courses->image)}}" alt="">
                    </div>
                    <div class="topic-course-text-content">
                        <h2 class="topic-course-title">{{$courses->title}}</h2>
                        <h3 class="topic-course-category">
                            <ul>
                                <li>{{$courses->category->name}}</li>
                            </ul>
                        </h3>
                        <h3 class="topic-course-author">{{$courses->user->name}}</h3>
                        <div class="topic-course-rating">
                            <i class="fa-sharp fa-solid fa-star">4.5</i>
                            <h4>( 3.000 reviews )</h4>
                        </div>
                    </div>
                    <?php
                        $courses_price = number_format($courses->price, 0, ",", ".");
                                        ?>
                    <h2 class="topic-course-price">Rp {{$courses_price}}</h2>
                </a>
                @endforeach
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