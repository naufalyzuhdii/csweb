@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/talent/thread-talent.css')}}">
@endsection

@section('content')

<section class="thread">
    <div class="thread-wrapper">
        {{-- Thread Content Heading --}}
        <div class="thread-content-heading">
            <h1> <span>Talent Thread</span> - Find Jobs </h1>
            <p>As a <i>freelancer or talent</i> you can look for jobs project. By posting a
                thread, freelancers or talents
                can apply the thread that you posted since they deal with the requirements.
            </p>
        </div>
        {{-- End of Thread Content Heading --}}

        <div class="thread-main">
            {{-- THREAD FILTER ( LEFT CONTENT ) --}}
            <!-- <div class="thread-filter">
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
            </div> -->
            {{-- END OF THREAD FILTER ( LEFT CONTENT ) --}}

            {{-- THREAD CONTENT ( RIGHT CONTENT ) --}}
            <div class="thread-content">
                {{-- Create Thread --}}
                <div class="create-thread-btn-wrapper">
                    <div class="create-thread-btn">
                        <a href="/view/create-thread-page-talent">
                            Create Thread
                        </a>
                    </div>
                </div>
                {{-- End Of Create Thread --}}


                <div class="thread-content-wrapper">
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

    </div>
</section>


<script>
var links_title = document.querySelectorAll(".categories-links-title");
links_title.forEach((links_title) => {
    links_title.addEventListener("click", () => {
        links_title.classList.toggle("change");
        const parent = links_title.parentNode;
        parent.classList.toggle("active");

    });
});
</script>

@endsection