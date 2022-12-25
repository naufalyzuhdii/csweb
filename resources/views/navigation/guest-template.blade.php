{{-- Section Header --}}
<section class="header">
    <div class="navigation">
        <div class="nav-1">
            <a href="/" class="logo">
                <img src="{{asset('images/header/logo-white.png')}}">
            </a>
            <div class="categories-navbar">
                <ul class="main-navigation">
                    <li>
                        <div class="categories-links">Categories</div>
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
                <a href="/view/thread-learner" class="thread-links">Thread</a>
            </div>
        </div>
        <div class="search-navbar">
            <form class="search-bar" action="#" method="get">
                <input type="search" name="keyword" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
        <div class="nav-2">
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
    </div>

</section>
{{-- End Of Section Header --}}





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