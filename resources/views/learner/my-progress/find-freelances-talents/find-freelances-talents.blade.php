@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-progress/find-freelances-talents/find-freelances-talents.css')}}">
@endsection

@section('content')
<section class="find-freelances-talents">
    <div class="find-freelances-talents-wrapper">
        <!-- Find Freelances Talents Header -->
        <div class="find-freelances-talents-header">
            <h1> <span>My Progress</span> - Find Freelances and Talents </h1>
            <p>Here is your accepted Freelances and Talents progress.</p>
        </div>
        <!-- Find Freelances Talents Header -->

        <!-- Find Freelances Talents Content -->
        <div class="find-freelances-talents-content">
            <div class="find-freelances-talents-content-wrapper">
                <div class="project-links">
                    <!-- Your Project -->
                    <div class="your-project">
                        <div class="project-title">
                            <h2>Website HTML</h2>
                        </div>
                        <div class="project-description">
                            <h4>Project Description : </h4>
                            <p>Membuat website html menggunakan framework laravel</p>
                        </div>

                        <div class="project-offer">
                            <div class="offer-duration">
                                <h2>Duration : 2 days</h2>
                            </div>
                            <div class="offer-price">
                                <h2>Price : Rp. 400.000</h2>
                            </div>
                        </div>
                        <div class="arrow" id="arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <!-- Your Project -->

                    <!-- Accepted Freelances Talents -->
                    <div class="accepted-freelances-talents">
                        <div class="freelances-talents-data">
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
                            <div class="chat-btn">
                                <a href="">
                                    Chat Talent
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Accepted Freelances Talents -->
                </div>
                <div class="project-links">
                    <!-- Your Project -->
                    <div class="your-project">
                        <div class="project-title">
                            <h2>Website HTML</h2>
                        </div>
                        <div class="project-description">
                            <h4>Project Description : </h4>
                            <p>Membuat website html menggunakan framework laravel</p>
                        </div>

                        <div class="project-offer">
                            <div class="offer-duration">
                                <h2>Duration : 2 days</h2>
                            </div>
                            <div class="offer-price">
                                <h2>Price : Rp. 400.000</h2>
                            </div>
                        </div>
                        <div class="arrow" id="arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <!-- Your Project -->

                    <!-- Accepted Freelances Talents -->
                    <div class="accepted-freelances-talents">
                        <div class="freelances-talents-data">
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
                            <div class="chat-btn">
                                <a href="">
                                    Chat Talent
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Accepted Freelances Talents -->
                </div>
                <div class="project-links">
                    <!-- Your Project -->
                    <div class="your-project">
                        <div class="project-title">
                            <h2>Website HTML</h2>
                        </div>
                        <div class="project-description">
                            <h4>Project Description : </h4>
                            <p>Membuat website html menggunakan framework laravel</p>
                        </div>

                        <div class="project-offer">
                            <div class="offer-duration">
                                <h2>Duration : 2 days</h2>
                            </div>
                            <div class="offer-price">
                                <h2>Price : Rp. 400.000</h2>
                            </div>
                        </div>
                        <div class="arrow" id="arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <!-- Your Project -->

                    <!-- Accepted Freelances Talents -->
                    <div class="accepted-freelances-talents">
                        <div class="freelances-talents-data">
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
                            <div class="chat-btn">
                                <a href="">
                                    Chat Talent
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Accepted Freelances Talents -->
                </div>
            </div>
        </div>
        <!-- Find Freelances Talents Content -->
    </div>
</section>


<script>
var yourProject = document.querySelectorAll(".your-project");
yourProject.forEach((yourProject) => {
    yourProject.addEventListener("click", () => {
        yourProject.classList.toggle("change");
        const parent = yourProject.parentNode;
        parent.classList.toggle("active");

    });
});
</script>

@endsection