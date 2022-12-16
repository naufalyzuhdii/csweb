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
                        <h2>Jason</h2>
                    </div>
                    <div class="learner-thread-project-title">
                        <h4>Project title : </h4>
                        <p>-</p>
                    </div>
                    <div class="learner-thread-offer">
                        <h4>Offer : </h4>
                        <div class="learner-thread-offer-detail">
                            <h4>Duration : -</h4>
                            <h4>Price range : <span>Rp - </span> - <span>Rp
                                    -</span></h4>
                        </div>

                    </div>
                    <div class="learner-thread-bottom-content">
                        <div class="talents-apply">
                            <div class="talents-apply-wrapper">
                                <h4><span>2 </span>talent(s) has apply this offer</h4>
                            </div>
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
                                    <h2>Udin Petot</h2>
                                </div>
                                <div class="appliers-offered-price">
                                    <h3>Offered Price : <span> Rp 700.000</span></h3>
                                </div>
                                <div class="appliers-offered-description">
                                    <h3>Offered Description : </h3>
                                    <p>Karena susah dan sulit untuk pengembangannya dan diperlukan beberapa aspek</p>
                                </div>
                                <div class="appliers-documents">
                                    <h3>Document Uploaded : </h3>
                                    <ul>
                                        <li><a href="#1">portfolio.jpg</a></li>
                                        <li><a href="#2">gambar.jpg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <h2>Udin Petot</h2>
                                </div>
                                <div class="appliers-offered-price">
                                    <h3>Offered Price : <span> Rp 1.000.000</span></h3>
                                </div>
                                <div class="appliers-offered-description">
                                    <h3>Offered Description : </h3>
                                    <p>Karena susah dan sulit untuk pengembangannya dan diperlukan beberapa aspek</p>
                                </div>
                                <div class="appliers-documents">
                                    <h3>Document Uploaded : </h3>
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