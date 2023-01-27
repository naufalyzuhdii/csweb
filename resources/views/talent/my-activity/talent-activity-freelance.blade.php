@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-activity/talent-activity-freelance.css')}}">
@endsection

@section('content')
<section class="talent-activity-freelance">
    <div class="section-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Activity</span> - Freelances </h1>
            <p>Here as a <i>talent</i>, you can track and see your activity progress of your freelances.
            </p>
        </div>
        <!-- End Of Title Heading -->

        <!-- Upper Nav Wrapper -->
        <div class="upper-nav-wrapper">
            <div class="nav-freelances" id="nav">
                <a class="active" href="/view/my-activity-freelance">
                    Freelances
                </a>
            </div>
            <div class="nav-applied-jobs" id="nav">
                <a class="" href="/view/my-activity-applied-jobs">
                    Applied Jobs
                </a>
            </div>
        </div>
        <!-- End Of Upper Nav Wrapper -->

        <!-- Talent Activity Freelance Content Wrapper -->
        <div class="talent-activity-freelance-content-wrapper">
            <a href="/view/freelance-detail/" class="freelance-content-item">
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
                <div class="content-wrapper">
                    <h3 class="learner-name">Jason</h3>
                    <div class="package-wrapper">
                        <div class="service-name">
                            <div class="title_wrapper">
                                <h3>Service Name</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p> Create Website Developments with ReactJs
                                </p>
                            </div>
                        </div>
                        <div class="service-package">
                            <div class="title_wrapper">
                                <h3>Choosen Package</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p>Medium
                                </p>
                            </div>
                        </div>
                        <div class="service-price">
                            <div class="title_wrapper">
                                <h3> Price</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p> Rp 300.000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress-status">
                    <h3>Progress Status : <span>On working</span></h3>
                </div>
            </a>
        </div>
        <!-- End Of Talent Activity Freelance Content Wrapper -->
    </div>
</section>


@endsection