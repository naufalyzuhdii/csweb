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

        <!-- Upper Nav Wrapper -->
        <div class="upper-nav-wrapper">
            <div class="nav-freelances" id="nav">
                <a class="" href="/view/my-activity-freelance">
                    Freelance
                </a>
            </div>
            <div class="nav-applied-jobs" id="nav">
                <a class="active" href="/view/my-activity-applied-jobs">
                    Applied Jobs
                </a>
            </div>
        </div>
        <!-- End Of Upper Nav Wrapper -->



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
                        <h3 class="project-title">
                            Project Title : <span> Create Website with Laravel</span>
                        </h3>
                        <h3 class="project-description">
                            Project Description : <span> Membuat website simpel dengan Laravel</span>
                        </h3>
                        <div class="offer-wrapper">
                            <h3 class="duration">
                                Duration : <span>2 days</span>
                            </h3>
                            <h3 class="price-range">
                                Price range : <span>Rp 300.000</span>
                            </h3>
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