@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-progress/dealed-projects/dealed-projects.css')}}">
@endsection

@section('content')
<section class="dealed-projects">
    <div class="dealed-projects-wrapper">
        <!-- Dealed Projects Header-->
        <div class="dealed-projects-header">
            <h1> <span>My Progress</span> - Dealed Projects </h1>
            <p>Here is your accepted Freelances and Talents progress.</p>
        </div>
        <!-- Dealed Projects Header-->

        <!-- Dealed Projects Content -->
        <div class="dealed-projects-content">
            <div class="dealed-projects-content-wrapper">
                <div class="project-links">
                    <!-- Your Project -->
                    <div class="your-project">
                        <a href="/view/my-progress/dealed-projects/project-details/" class="details-links">Details</a>
                        <!-- THREAD CONTENT LEARNER MAIN -->
                        <div class="thread-content-learner-main">
                            <!-- PROFILE LEARNER -->
                            <div class="profile-learner">
                                <div class="profile-learner-image-wrapper">
                                    <div class="profile-learner-image">
                                        <img src="{{asset('images/thread/jason.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="profile-learner-role-wrapper">
                                    <div class="profile-learner-role">
                                        <h2>Learner</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- PROFILE LEARNER -->

                            <!-- LEARNER THREAD CONTENT -->
                            <div class="learner-thread-content">
                                <div class="learner-thread-name">
                                    <h3>Jason</h3>
                                </div>
                                <div class="learner-thread-project-title">
                                    <div class="title_wrapper">
                                        <h3>Project Title</h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <p>Website LaravelASDAAAADSA</p>
                                    </div>
                                </div>
                                <div class="learner-thread-project-description">
                                    <div class="title_wrapper">
                                        <h3>Project Description </h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="learner-thread-project-required-skills">
                                    <div class="title_wrapper">
                                        <h3>Required Skills </h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>Laravel</li>
                                            <li>CSS</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="learner-thread-offer">
                                    <div class="title_wrapper">
                                        <h3>Offer </h3>
                                    </div>
                                    <div class="learner-thread-offer-detail">
                                        <h3>Duration : </h3>
                                        <h3>Price range : <span>Rp </span> - <span>Rp
                                            </span></h3>
                                    </div>
                                </div>
                                <div class="arrow" id="arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>

                            </div>
                            <!-- LEARNER THREAD CONTENT -->
                        </div>
                    </div>
                    <!-- Your Project -->

                    <!-- Accepted Freelances Talents -->
                    <div class="accepted-freelances-talents">
                        <div class="freelances-talents-data">
                            <div class="appliers-picture">
                                <div class="appliers-picture-wrapper">
                                    <img src="{{asset('images/thread/jason.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="appliers-data">
                                <div class="appliers-name">
                                    <h3>Udin Petot</h3>
                                </div>
                                <div class="appliers-offered-price">
                                    <div class="title_wrapper_applier">
                                        <h3>Offered Price</h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content_applier">
                                        <h3>Rp 700.000</h3>
                                    </div>
                                </div>
                                <div class="appliers-offered-description">
                                    <div class="title_wrapper_applier_description">
                                        <h3>Offered Description</h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content_applier_description">
                                        <h3>Karena susah dan sulit untuk pengembangannya dan diperlukan beberapa aspek
                                        </h3>
                                    </div>

                                </div>
                                <div class="appliers-documents">
                                    <div class="title_wrapper_applier_document">
                                        <h3>Document Uploaded</h3>
                                        <h3>:</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#1">portfolio.jpg</a></li>
                                        <li><a href="#2">gambar.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-btn">
                                <a href="">
                                    Chat Talent
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Accepted Freelances Talents -->
                </div>

            </div>
        </div>
        <!-- Dealed Projects Content -->
    </div>
</section>


<script>
var yourProject = document.querySelectorAll(".your-project");
yourProject.forEach((yourProject) => {
    yourProject.addEventListener("click", () => {
        yourProject.classList.toggle("change");
        const parent = yourProject.parentNode;
        parent.classList.toggle("active");

    });
});
</script>

@endsection