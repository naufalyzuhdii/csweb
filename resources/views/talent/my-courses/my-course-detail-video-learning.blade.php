@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/my-course-detail-video-learning.css')}}">
@endsection

@section('content')

<section class="my-course-detail-video-learning">
    <div class="my-course-detail-video-learning-wrapper">
        <!-- Video Learning Wrapper -->
        <div class="video-learning-wrapper">
            <video width="320" height="240" controls>
                <source src="{{asset('videos/'.$video->video)}}" type="video/mp4">
            </video>

            <div class="video-learning-text">
                <a class="back-links"
                    href="/my_course/{{$my_course->id}}/detail-chapter/{{$detail_chapter->id}}/upload-new-video">
                    < Back</a>
                        <h2 class="video-learning-chapter-title">
                            {{$video->course_detail->chapter}} <span> - </span> {{$video->video_title}}
                        </h2>
                        <div class="video-learning-chapter-description">
                        </div>
            </div>
        </div>
        <!-- Video Learning Wrapper -->
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