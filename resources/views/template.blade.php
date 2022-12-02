<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=PT+Serif:wght@400;700&family=Roboto:wght@300;500&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">

    <title>CS</title>
</head>

<body>
    {{-- Section Header --}}
    <section class="header">
        <div class="navigation">
            <a href="/" class="logo">
                <img src="{{asset('images/header/logo-white.png')}}">
            </a>
            <div class="categories-navbar">
                <ul class="main-navigation">
                    <li>
                        <a href="#" class="categories-links">Categories</a>
                        <ul>
                            <li><a href="/view/course">Technology <i class="fa-sharp fa-solid fa-play"></i></a>
                                <ul>
                                    <li><a href="/view/sub-course">Wesbite<i class="fa-sharp fa-solid fa-play"></i></a>
                                        <ul>
                                            <li><a href="/view/topic-course">HTML</a></li>
                                            <li><a href="#3">CSS</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#2">Mobile Application <i class="fa-sharp fa-solid fa-play"></i></a>
                                        <ul>
                                            <li><a href="">Android Studio</a></li>
                                            <li><a href="#3">Java</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#3">Engineering</a></li>
                                </ul>
                            </li>
                            <li><a href="#B">Mathemathic <i class="fa-sharp fa-solid fa-play"></i></a>
                                <ul>
                                    <li><a href="#11">Calculus</a></li>
                                    <li><a href="#22">Algebra</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="thread-navbar">
                <a href="/view/thread" class="thread-links">Thread</a>
            </div>

            <div class="search-navbar">
                <form class="search-bar" action="#" method="get">
                    <input type="search" name="keyword" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>

            <div class="cart-navbar">
                <a href="/view/cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>



            <div class="nav-auth">
                <a href="/view/signin_page" class="auth-btn">
                    <div class="auth-links">
                        Sign In
                    </div>
                </a>
                <a href="/view/signup_page" class="auth-btn">
                    <div class="auth-links">
                        Sign Up
                    </div>
                </a>
            </div>
        </div>

    </section>
    {{-- End Of Section Header --}}

    @yield('content')




    {{-- Section Footer --}}
    <section class="footer">
        <div class="footer-wrapper">
            <a href="#" class="logo-footer">
                <img src="/images/header/logo-white.png" alt="">
            </a>
            <ul class="content">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help and Support</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>

            <div class="copyright">
                <p>&copy; 2022 Course Service &#x2022; All Rights Reserved</p>
            </div>
        </div>
    </section>

    {{-- End Of Section Footer --}}

    <script>
        // DROPDOWN CATEGORIES
        document
        .querySelector(".categories-nav-links")
        .addEventListener("click", () => {
            document.querySelector(".categories-nav-links").classList.toggle("change");
        });



    </script>



</body>

</html>
