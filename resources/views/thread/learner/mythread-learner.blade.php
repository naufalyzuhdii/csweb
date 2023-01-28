@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/learner/mythread-learner.css')}}">
@endsection

@section('content')

<section class="mythread-learner">
    <div class="mythread-learner-wrapper">
        <!-- Thread Content Heading -->
        <div class="thread-content-heading">
            <h1> <span>Learner Thread</span> - My Thread </h1>
            <p>See your own all project's threads.</p>
        </div>
        <!-- Thread Content Heading -->

        <!-- THREAD CONTENT WRAPPER -->
        <div class="thread-content-wrapper">
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
                            <h3>Jason</h3>
                        </div>
                        <div class="learner-thread-project-title">
                            <div class="title_wrapper">
                                <h3>Project Title</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p></p>
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
                        <div class="learner-thread-bottom-content">
                            <div class="talents-apply-wrapper">
                                <h3 class="talents-apply"><span>2 </span>talent(s) has apply this offer</h3>
                                <h3 class="view-appliers">
                                    <a href="/view/appliers">View Appliers</a>
                                </h3>
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