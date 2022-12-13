@extends('navigation.learner-template')
<link rel="stylesheet" href="{{asset('css/thread/learner/thread-talent-detail.css')}}">

@section('content')

<section class="thread-talent-detail">
    <div class="thread-talent-detail-wrapper">
        <div class="thread-content">
            {{-- Thread Content Heading --}}
            <div class="thread-content-heading">
                <h1> <span>Learner Thread</span> - Talent Shop Detail </h1>
                <p>In Talent Shop Detail, you can see what kind of services that freelancer or talents serve at their
                    shop, their description skills, ratings and reviews. Once all the things are good for you, you can
                    order the services.
                </p>
            </div>
            {{-- Thread Content Heading --}}

            {{-- Thread Content Header --}}
            <div class="thread-content-header">
                <div class="thread-content-talent-wrapper">
                    <div class="thread-content-talent-main">
                        <div class="profile-talent">
                            <div class="profile-talent-image-wrapper">
                                <div class="profile-talent-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="profile-talent-role-wrapper">
                                <div class="profile-talent-role">
                                    <h2>Talent</h2>
                                </div>
                            </div>
                        </div>

                        <div class="talent-thread-content">
                            <div class="talent-thread-name">
                                <h2>Udin Petot</h2>
                            </div>
                            <div class="talent-thread-description">
                                <h4>Services : </h4>
                                <p>I can do Website Development with ReactJs, HTML, CSS, Bootstrap</p>
                            </div>
                            <div class="talent-thread-offer">
                                <div class="talent-thread-offer-detail">
                                    <h4>Start Price : Rp. 300.000</h4>
                                </div>
                            </div>
                            <div class="talent-thread-bottom-content">
                                <div class="review-wrapper">
                                    <h4>Review</h4>
                                    <p>
                                        <i class="fa-solid fa-star"></i>
                                        <span id="rating">4.8</span>
                                        <span>(1000)</span>
                                    </p>
                                </div>
                                <a href="#chat" class="chat-btn">
                                    <div class="chat-btn-wrapper">
                                        <h3>Chat to talent</h3>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Thread Content Header --}}

            {{-- Thread Content Main --}}
            <div class="thread-content-main">
                <div class="thread-content-main-wrapper">


                </div>
            </div>
            {{-- Thread Content Main --}}
        </div>


    </div>
</section>

@endsection
