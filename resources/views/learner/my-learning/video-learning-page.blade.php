@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-learning/video-learning-page.css')}}">
@endsection

@section('content')
<section class="video-learning-page">
    <div class="video-learning-page-wrapper">
        <div class="video-wrapper">
            <video width="320" height="240" controls>
                <source src="{{asset('videos/'.$courseVideo->video)}}" type="video/mp4">
            </video>
        </div>
        <div class="video-details-wrapper">
            <div class="course-title">
                <h3>{{$course->title}}</h3>
            </div>
            <div class="video-details">
                <h3>{{$courseDetail->chapter}}</h3>
                <span>-</span>
                <h3>{{$courseVideo->video_title}}</h3>
            </div>
        </div>
        <div class="back-btn">
            <a href="/view/my-learning/course-learned-detail/{{$course->id}}">
                &#8592; Back
            </a>
        </div>


    </div>
</section>


@endsection