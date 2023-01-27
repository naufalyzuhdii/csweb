@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('/css/thread/learner/mythread-appliers.css')}}">
@endsection

@section('content')
<section class="mythread-appliers">
    <div class="mythread-appliers-wrapper">
        <!-- My Thread Appliers Heading -->
        <div class="mythread-appliers-heading">
            <h1> <span>Learner Thread</span> - My Thread's Appliers</h1>
            <p>See who dan how many person has applied your project's thread.</p>
        </div>
        <!-- My Thread Appliers Heading -->

        <!-- My Thread Appliers Upper Content -->
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
        <!-- My Thread Appliers Upper Content -->

        <!-- My Thread Appliers Content -->
        <div class="mythread-appliers-content">
            <div class="mythread-appliers-content-wrapper">
                <!-- == My Thread Appliers Content Heading == -->
                <div class="mythread-appliers-content-heading">
                    <h2>Appliers</h2>
                </div>
                <!-- == My Thread Appliers Content Heading == -->

                <!-- == My Thread Appliers Content Main == -->
                <div class="mythread-appliers-content-main">
                    <div class="appliers">
                        <div class="accept-btn">
                            <a href="#">
                                <h3>Accept</h3>
                            </a>
                        </div>
                        <div class="appliers-wrapper">
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
                        </div>
                    </div>

                </div>
                <!-- == My Thread Appliers Content Main == -->
            </div>
        </div>
        <!-- My Thread Appliers Content -->
    </div>
</section>


@endsection