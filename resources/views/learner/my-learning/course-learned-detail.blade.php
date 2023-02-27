@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-learning/course-learned-detail.css')}}">
@endsection

@section('content')

<section class="course-learned-detail">
    <div class="course-learned-detail-wrapper">
        <div class="video-chapters-heading">
            <h1> <span>My Learning</span> </h1>
            <h3>
                Course Name : {{$course->title}}
            </h3>
        </div>
        <div class="back-btn">
            <a href="/view/my-learning/{{auth()->user()->id}}">
                &#8592; Back
            </a>
        </div>
        <!-- Video Chapters Wrapper -->
        <div class="videos-chapter-wrapper">
            <div class="videos-chapters">
                @foreach($courseDetail as $courseDetail)
                <div class="chapter">
                    <div class="chapter-title">
                        <h2>{{$courseDetail->chapter}}</h2>
                        <i class='fas fa-angle-right' id="arrow"></i>
                    </div>
                    <div class="chapter-links">
                        @foreach($courseDetail->course_video as $video)
                        <a href="/course/{{$course->id}}/chapter/{{$video->course_detail_id}}/video/{{$video->id}}"
                            class="video-links">
                            <h2>{{$video->video_title}}</h2>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endforeach
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