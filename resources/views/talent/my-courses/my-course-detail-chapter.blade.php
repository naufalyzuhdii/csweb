@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/my-course-detail-chapter.css')}}">
@endsection

@section('content')
<section class="my-course-detail-chapter">
    <div class="my-course-detail-chapter-wrapper">
        <div class="links">
            <h3>
                <a href="/view/my-courses">My Courses</a>
            </h3>
        </div>

        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Courses</span> - Course Detail Chapter </h1>
            <p>Here you can create your title's chapter.
            </p>
        </div>
        <!-- End Of Title Heading -->


        <!-- Content Wrapper -->
        <div class="my-course-detail-chapter-content-wrapper">
            <form action="/upload-detail-chapter" method="post" id="form-upload-detail-chapter"
                enctype="multipart/form-data">
                @csrf
                <input type="text" name="course_id" value="{{$my_course->id}}" hidden>
                <div class="course-chapter-title-wrapper">
                    <label for="chapter">Course Detail Chapter - Title</label>
                    <input type="text" name="course_chapter_title" id="chapter"
                        placeholder="example: BAB 1 Pendahuluan">
                </div>
                @error('course_chapter_title')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="button-submit-wrapper">
                    <button type="submit" value="submit" class="submit-btn">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <!-- Content Wrapper -->

        <!-- Posted Titles Chapter -->
        <div class="posted-my-course-detail-chapter-content-wrapper">
            <div class="posted-chapter-heading">
                <h3>Here are your course's content.</h3>
            </div>
            @if(session('message'))
            <div class="success">
                {{session('message')}}
            </div>
            @endif
            <div class="posted-chapter-wrapper">
                {{-- @dd($chapter) --}}
                @foreach ($chapter as $cp)
                <div class="posted-chapter-links-wrapper" href="/showmateri/{{ $cp->id }}">
                    <div class="posted-chapter-links">
                        <div class="posted-chapter-title">
                            <h3>{{ $cp->chapter }}</h3>
                        </div>
                        <a href="/my_course/{{$my_course->id}}/detail-chapter/{{$cp->id}}/upload-new-video"
                            class="upload-new-video">Upload new
                            video</a>
                        <a href="/delete-chapter/{{$cp->id}}" class="delete-chapter"><i
                                class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Posted Titles Chapter -->
    </div>
</section>

<script>
var chapter_links = document.querySelectorAll(".posted-chapter-links");
chapter_links.forEach((chapter_links) => {
    chapter_links.addEventListener("click", () => {
        chapter_links.classList.toggle("change");
        const parent = chapter_links.parentNode;
        parent.classList.toggle("active");

    });
});
</script>
@endsection