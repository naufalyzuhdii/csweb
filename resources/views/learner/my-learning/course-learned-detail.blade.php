@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-learning/course-learned-detail.css')}}">
@endsection

@section('content')

<section class="course-learned-detail">
    @foreach ($coursedetail as $cd)
       
            
            
            <div class="course-learned-detail-wrapper">
                <!-- Video Learning Wrapper -->
                <div class="video-learning-wrapper">
                    @foreach ($cd->course_video as $val)
                        <video width="320" height="240" controls>
                            <source src="{{ asset('videos/'.$val->video) }}" type="video/mp4">
                        </video>
                        <div class="video-learning-text">
                            <h2 class="video-learning-chapter-title">
                                {{ $cd->chapter }} <span> - </span> <span> {{ $val->video_title }} </span>
                            </h2>
                            <div class="video-learning-chapter-description">
                                <h2>Description : </h2>
                                <p>This course materi talks about introduction of HTML Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Dolore beatae dolorem ducimus itaque iste quia aliquam ea quisquam iure unde
                                    laudantium, asperiores corrupti animi provident id libero laborum numquam modi?</p>
                            </div>
                        </div>
                    @endforeach
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
                                <h2>{{ $cd->chapter }}</h2>
                                <i class='fas fa-angle-right' id="arrow"></i>
                            </div>
                            @foreach ($cd->course_video as $val)
                                <div class="chapter-links">
                                    <a href="" class="video-links">
                                        <h2>{{ $val->video_title }}</h2>
                                        <h3>3 min</h3>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- Video Chapters Wrapper -->

            </div>
    @endforeach
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