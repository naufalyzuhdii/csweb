@extends('navigation.learner-template')

<link rel="stylesheet" href="{{asset('css/thread/learner/thread-learner.css')}}">


@section('content')

<section class="thread">
    <div class="thread-wrapper">

        {{-- THREAD FILTER ( LEFT CONTENT ) --}}
        {{-- <div class="thread-filter">
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
        </div> --}}
        {{-- END OF THREAD FILTER ( LEFT CONTENT ) --}}


        {{-- THREAD CONTENT ( RIGHT CONTENT ) --}}
        <div class="thread-content">
            <div class="thread-content-heading">
                <h1> <span>Learner Thread</span> - Post a Project </h1>
                <p>As a <i>learner</i> you can look for freelancers or talents to work on your projects. By posting a
                    thread, freelancers or talents
                    can apply the thread that you posted since they deal with the requirements.
                </p>
            </div>


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
                                    <h4>Project title : </h4>
                                    <p>Pengajar materi perancangan Website Development menggunakan Laravel</p>
                                </div>
                                <div class="learner-thread-offer">
                                    <h4>Offer : </h4>
                                    <div class="learner-thread-offer-detail">
                                        <h4>Duration : 1 - 2 hours</h4>
                                        <h4>Price range : <span>Rp 300.000</span> - <span>Rp 500.000</span></h4>
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
                                    <h4>Project title : </h4>
                                    <p>Pengajar materi perancangan Website Development menggunakan Laravel</p>
                                </div>
                                <div class="learner-thread-offer">
                                    <h4>Offer : </h4>
                                    <div class="learner-thread-offer-detail">
                                        <h4>Duration : 1 - 2 hours</h4>
                                        <h4>Price range : <span>Rp 300.000</span> - <span>Rp 500.000</span></h4>
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
            </div>

        </div>
        {{-- END OF THREAD CONTENT ( RIGHT CONTENT ) --}}
    </div>
</section>


<script>
    // var links_title = document.querySelectorAll(".categories-links-title");
    // links_title.forEach((links_title) =>
    // {
    //     links_title.addEventListener("click", () =>
    //     {
    //             links_title.classList.toggle("change");
    //             const parent = links_title.parentNode;
    //             parent.classList.toggle("active");

    //     });
    // });



</script>

@endsection
