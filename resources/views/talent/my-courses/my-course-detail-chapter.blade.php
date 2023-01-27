@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/my-course-detail-chapter.css')}}">
@endsection

@section('content')
<section class="my-course-detail-chapter">
    <div class="my-course-detail-chapter-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Courses</span> - Course Detail Chapter </h1>
            <p>Here you can create your title's chapter.
            </p>
        </div>
        <!-- End Of Title Heading -->


        <!-- Content Wrapper -->
        <div class="my-course-detail-chapter-content-wrapper">
            <form action="/upload-detail-chapter" method="get" id="form-upload-detail-chapter">
                <div class="course-chapter-title-wrapper">
                    <label for="">Course Chapter Title</label>
                    <input type="text" name="course-chapter-title">
                </div>
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
            <div class="posted-chapter-wrapper">
                <div class="posted-chapter-links-wrapper">
                    <div class="posted-chapter-links">
                        <div class="posted-chapter-title">
                            <h3>BAB 1 : Introduction</h3>
                        </div>
                        <i class="fa-sharp fa-solid fa-play" id="arrow-chapter"></i>
                        <a href="/detail-chapter/id/upload-new-video" class="upload-new-video">Upload new video</a>
                        <a href="/delete-chapter/id/" class="delete-chapter"><i class="fa-solid fa-trash"></i></a>
                    </div>
                    <div class="posted-chapter-videos-content-wrapper">
                        <div class="posted-videos-links">
                            <h3>
                                <a href="/view/video-learning/id/">1. Concept Introduction</a>
                            </h3>
                            <h3>
                                <span>
                                    1 hour
                                </span>
                            </h3>
                            <a href="/delete-videos/id/" class="delete-videos"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <div class="posted-videos-links">
                            <h3>
                                <a href="/view/video-learning/id/">2. Basic of Technology</a>
                            </h3>
                            <h3>
                                <span>
                                    1 hour
                                </span>
                            </h3><a href="/delete-videos/id/" class="delete-videos"><i
                                    class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>

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