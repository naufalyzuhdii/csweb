@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-progress/course/course-learn-detail.css')}}">
@endsection

@section('content')

<section class="course-learn-detail">
    <div class="course-learn-detail-wrapper">
        <!-- Video Learning Wrapper -->
        <div class="video-learning-wrapper">
            <video width="320" height="240" controls>
                <source src="{{asset('videos/learn-html.mp4')}}" type="video/mp4">
            </video>
            <div class="video-learning-text">
                <h2 class="video-learning-chapter-title">
                    Bab 1 : Introduction <span> - </span> <span> 1. Introduction HTML </span>
                </h2>
                <div class="video-learning-chapter-description">
                    <h2>Description : </h2>
                    <p>This course materi talks about introduction of HTML Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Dolore beatae dolorem ducimus itaque iste quia aliquam ea quisquam iure unde
                        laudantium, asperiores corrupti animi provident id libero laborum numquam modi?</p>
                </div>
            </div>
        </div>
        <!-- Video Learning Wrapper -->

        <!-- Video Chapters Wrapper -->
        <div class="video-chapters-wrapper">
            <h3 class="video-chapters-title">
                Your course content
            </h3>
            <div class="videos-chapters">
                <div class="chapter">
                    <div class="chapter-title">
                        <h2>Bab 1 : Introduction</h2>
                        <i class='fas fa-angle-right' id="arrow"></i>
                    </div>
                    <div class="chapter-links">
                        <a href="" class="video-links">
                            <h2>1. Introduction</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to do ?</h2>
                            <h3>5 min</h3>
                        </a>
                    </div>

                </div>
                <div class="chapter">
                    <div class="chapter-title">
                        <h2>Bab 2 : Speculation</h2>
                        <i class='fas fa-angle-right' id="arrow"></i>
                    </div>
                    <div class="chapter-links">
                        <a href="" class="video-links">
                            <h2>1. Introduction</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to use ?</h2>
                            <h3>5 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>1. Introduction</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to use ?</h2>
                            <h3>5 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>1. Introduction</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to use ?</h2>
                            <h3>5 min</h3>
                        </a>
                    </div>

                </div>
                <div class="chapter">
                    <div class="chapter-title">
                        <h2>Bab 1 : Introduction</h2>
                        <i class='fas fa-angle-right' id="arrow"></i>
                    </div>
                    <div class="chapter-links">
                        <a href="" class="video-links">
                            <h2>1. Introduction HTML</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to do ?</h2>
                            <h3>5 min</h3>
                        </a>
                    </div>

                </div>
                <div class="chapter">
                    <div class="chapter-title">
                        <h2>Bab 2 : Speculation</h2>
                        <i class='fas fa-angle-right' id="arrow"></i>
                    </div>
                    <div class="chapter-links">
                        <a href="" class="video-links">
                            <h2>1. Introduction</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to use ?</h2>
                            <h3>5 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>1. Introduction</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to use ?</h2>
                            <h3>5 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>1. Introduction</h2>
                            <h3>3 min</h3>
                        </a>
                        <a href="" class="video-links">
                            <h2>2. How to use ?</h2>
                            <h3>5 min</h3>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Video Chapters Wrapper -->
    </div>
</section>

<script>
var chapterTitle = document.querySelectorAll(".chapter-title");
chapterTitle.forEach((chapterTitle) => {
    chapterTitle.addEventListener("click", () => {
        chapterTitle.classList.toggle("change");
        const parent = chapterTitle.parentNode;
        parent.classList.toggle("active");

    });
});
</script>


@endsection