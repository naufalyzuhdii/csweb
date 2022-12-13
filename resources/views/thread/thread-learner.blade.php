@extends('navigation.learner-template')

<link rel="stylesheet" href="{{asset('css/thread/thread-learner.css')}}">


@section('content')

<section class="thread">
    <div class="thread-wrapper">

        {{-- THREAD FILTER ( LEFT CONTENT ) --}}
        <div class="thread-filter">
            <div class="thread-filter-header">
                <h2>Categories</h2>
            </div>
            <div class="thread-filter-content">
                <div class="categories-links-wrapper">
                    <div class="categories-links-title">
                        <a href="#all-categories">All Categories</a>
                    </div>
                </div>
                <div class="categories-links-wrapper">
                    <div class="categories-links-title">
                        <a href="#websiteandprogramming">
                            Website and Programming
                        </a>
                        <i class="fa-solid fa-play" id="arrow-links"></i>
                    </div>
                    <div class="categories-links-content">
                        <a href="#FEDev">
                            FrontEnd Developer
                        </a>
                        <a href="#MobileApplication">
                            Mobile Application
                        </a>
                    </div>
                </div>
                <div class="categories-links-wrapper">
                    <div class="categories-links-title">
                        <a href="#Design">
                            Design
                        </a>
                        <i class="fa-solid fa-play" id="arrow-links"></i>
                    </div>
                    <div class="categories-links-content">
                        <a href="#logo">
                            Logo Design
                        </a>
                        <a href="#branding">
                            Branding Design
                        </a>
                    </div>
                </div>
            </div>

            <div class="thread-filter-role">
                <div class="role-links">
                    <a href="#">Learner</a>
                    <input type="checkbox" name="learner-checkbox">
                </div>
                <div class="role-links">
                    <a href="#">Talent</a>
                    <input type="checkbox" name="learner-checkbox">
                </div>
            </div>
        </div>
        {{-- END OF THREAD FILTER ( LEFT CONTENT ) --}}


        {{-- THREAD CONTENT ( RIGHT CONTENT ) --}}
        <div class="thread-content">
            {{-- Create Thread --}}
            <div class="create-thread-btn-wrapper">
                <div class="create-thread-btn">
                    <a href="/view/create-thread-page-learner">
                        Create Thread
                    </a>
                </div>
            </div>
            {{-- End Of Create Thread --}}


            <div class="thread-content-wrapper">
                {{-- Thread Learner --}}
                <a href="/view/thread-learner-detail" class="thread-content-learner-links">
                    <div class="thread-content-learner-wrapper">
                        <div class="thread-content-learner-valid-wrapper">
                            <div class="thread-content-learner-valid">
                                <h3>Status Offer : Valid</h3>
                            </div>
                        </div>

                        <div class="thread-content-learner-main">
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

                            <div class="learner-thread-content">
                                <div class="learner-thread-name">
                                    <h2>Jason</h2>
                                </div>
                                <div class="learner-thread-description">
                                    <h4>Looking for :</h4>
                                    <p>Pengajar materi perancangan Website Development menggunakan Laravel</p>
                                </div>
                                <div class="learner-thread-offer">
                                    <h4>Offer : </h4>
                                    <div class="learner-thread-offer-detail">
                                        <h4>Duration : 1 - 2 hours</h4>
                                        <h4>Price : Rp 500.000</h4>
                                    </div>

                                </div>
                                <div class="learner-thread-bottom-content">
                                    <div class="talents-accept">
                                        <h4><span>2 </span>talent(s) has accept this offer</h4>
                                    </div>
                                    <div class="offer-started-from">
                                        <h4>Offer started from: <span>13 Januari 2022</span></h4>
                                    </div>

                                    <div class="offer-ended-at">
                                        <h4>Offer ended at : <span>15 April 2022</span></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                {{-- End Of Thread Learner --}}


                {{-- Thread Talent --}}
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
                                    <h4>Services : </h4>
                                    <p>I can do Website Development with ReactJs, HTML, CSS, Bootstrap</p>
                                </div>
                                <div class="talent-thread-offer">
                                    <div class="talent-thread-offer-detail">
                                        <h4>Start Price : Rp. 300.000</h4>
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
                {{-- End Of Thread Talent --}}
            </div>

        </div>
        {{-- END OF THREAD CONTENT ( RIGHT CONTENT ) --}}
    </div>
</section>


<script>
    var links_title = document.querySelectorAll(".categories-links-title");
    links_title.forEach((links_title) =>
    {
        links_title.addEventListener("click", () =>
        {
                links_title.classList.toggle("change");
                const parent = links_title.parentNode;
                parent.classList.toggle("active");

        });
    });



</script>

@endsection
