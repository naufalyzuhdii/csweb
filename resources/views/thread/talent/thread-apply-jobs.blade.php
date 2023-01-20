@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/talent/thread-apply-jobs.css')}}">
@endsection


@section ('content')
<section class="apply-jobs">
    <div class="apply-jobs-wrapper">

        <!-- Thread Content Heading -->
        <div class="thread-content-heading">
            <h1> <span>Talent Thread</span> - Apply Jobs </h1>
            <p>As a <i>talent</i> you can look for jobs by apply projects thread that have been created by learners.
            </p>
        </div>
        <!-- End of Thread Content Heading -->


        <!-- THREAD CONTENT WRAPPER -->
        <div class="thread-content-wrapper">
            <!-- <a href="#/view/thread-learner-detail" class="thread-content-learner-links"> -->
            <div class="thread-content-learner-wrapper">
                <!-- THREAD CONTENT LEARNER VALID WRAPPER -->
                <div class="thread-content-learner-valid-wrapper">
                    <div class="thread-content-learner-valid">
                        <h3>Status Offer : Valid</h3>
                    </div>
                </div>
                <!-- THREAD CONTENT LEARNER VALID WRAPPER -->

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
                            <h2>Jason</h2>
                        </div>
                        <div class="learner-thread-project-title">
                            <h4>Project title : </h4>
                            <p></p>
                        </div>
                        <div class="learner-thread-project-description">
                            <h4>Project Description : </h4>
                            <p></p>
                        </div>
                        <div class="learner-thread-offer">
                            <h4>Offer : </h4>
                            <div class="learner-thread-offer-detail">
                                <h4>Duration : </h4>
                                <h4>Price range : <span>Rp </span> - <span>Rp
                                    </span></h4>
                            </div>

                        </div>
                        <div class="learner-thread-bottom-content">
                            <div class="talents-apply">
                                <div class="talents-apply-wrapper">
                                    <h4><span>2 </span>talent(s) has apply this offer</h4>

                                </div>
                                <div class="talents-view-btn">
                                    <h3>
                                        <a href="/view/thread-apply-jobs-learner-detail">View Detail</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LEARNER THREAD CONTENT -->
                </div>
                <!-- THREAD CONTENT LEARNER MAIN -->
            </div>
            {{-- Thread Learner --}}

        </div>
        <!-- THREAD CONTENT WRAPPER -->
    </div>
</section>



@endsection