@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-activity/talent-activity-applied-jobs.css')}}">
@endsection

@section('content')
<section class="talent-activity-applied-jobs">
    <div class="section-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Activity</span> - Applied Jobs </h1>
            <p>Here as a <i>talent</i>, you can track and see your activity progress of your applied jobs.
            </p>
        </div>
        <!-- End Of Title Heading -->

        <!-- My Activity Applied Job Content Wrapper -->
        <div class="my-activity-applied-job-content-wrapper">
            <a href="/view/applied-job-detail/" class="applied-job-content-item">
                <div class="profile-learner">
                    <div class="profile-learner-image-wrapper">
                        <div class="profile-learner-image">
                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="profile-learner-role-wrapper">
                        <div class="profile-learner-role">
                            <h2>Learner</h2>
                        </div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <h3 class="learner-name">Jaenal</h3>
                    <div class="package-wrapper">
                        <div class="project-title">
                            <div class="title_wrapper">
                                <h3>Project Name</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p> Project Title
                                </p>
                            </div>
                        </div>
                        <div class="project-description">
                            <div class="title_wrapper">
                                <h3> Project Description</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p> Membuat website simpel dengan Laravel
                                </p>
                            </div>
                        </div>

                        <div class="offer-wrapper">
                            <div class="duration">
                                <div class="title_wrapper">
                                    <h3> Duration </h3>
                                    <h3>:</h3>
                                </div>
                                <div class="content">
                                    <p> 2 days
                                    </p>
                                </div>
                            </div>
                            <div class="price-range">
                                <div class="title_wrapper">
                                    <h3>Price range </h3>
                                    <h3>:</h3>
                                </div>
                                <div class="content">
                                    <p> Rp 300.000
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="progress-status">
                    <h3>Progress Status : <span>On working</span></h3>
                </div>
            </a>
        </div>
        <!-- End Of My Activity Applied Job Content Wrapper -->
    </div>
</section>


@endsection