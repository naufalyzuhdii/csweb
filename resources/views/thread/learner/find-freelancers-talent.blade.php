@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/learner/find-freelancers-talent.css')}}">
@endsection

@section('content')
<section class="find-freelancers-talents">
    <div class="find-freelancers-talents-wrapper">
        <div class="thread-content">
            <div class="thread-content-heading">
                <h1> <span>Learner Thread</span> - Find Freelancers or Talents </h1>
                <p>As a <i>learner</i> you can find any services based on what they are served at their shop.
                </p>
            </div>
            <div class="thread-content-wrapper">
                @if (count($thread_freelancers_talents) == 0)
                <div class="warn">
                    <h3>No Data</h3>
                </div>
                @else
                @foreach ( $thread_freelancers_talents as $thread_ft)
                <a href="/view/thread-talent-detail" class="thread-content-talent-links">
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
                                    <div class="title_wrapper">
                                        <h3>Services </h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <p>I can do Website Development with ReactJs, HTML, CSS, Bootstrap</p>
                                    </div>
                                </div>
                                <div class="talent-thread-offer">
                                    <div class="talent-thread-offer-detail">
                                        <div class="title_wrapper">
                                            <h3>Start Price </h3>
                                            <h3>:</h3>
                                        </div>
                                        <div class="content">
                                            <p>Rp. 300.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="talent-thread-bottom-content">
                                    <h4>Review</h4>
                                    <p>
                                        <i class="fa-solid fa-star"></i>
                                        <span id="rating">4.8</span>
                                        <span>(1000)</span>
                                    </p>
                                </div>
                            </div>



                        </div>
                    </div>
                </a>
                @endforeach
                @endif
            </div>
        </div>

    </div>
</section>

@endsection