{{-- Section Header --}}
<section class="header">
    <div class="navigation">
        <div class="nav-1">
            <a href="/view/talent-home" class="logo">
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
                <a href="" class="thread-links">
                    Thread
                </a>
                <ul>
                    <li> <a href="/view/thread-talent">Post your shop</a></li>
                    <li> <a href="/view/find-jobs">Find Jobs</a></li>
                </ul>
            </div>
        </div>

        <div class="search-navbar">
            <form class="search-bar" action="#" method="get">
                <input type="search" name="keyword" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>

        <div class="nav-2">
            <div class="your-freelance-job">
                <a href="#your-freelance-job">
                    <i class="fa-solid fa-handshake"></i>
                </a>
            </div>
            <div class="your-course">
                <a href="#your-course">
                    <i class="fa-solid fa-book"></i>
                </a>
            </div>
            <div class="profile-navbar">
                <a href="#profile" class="profile-navbar-links">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul>
                    <h2>Hi, {{ old('name', Auth::user()->name) }}</h2>
                    <h3>You signed in as <b>{{ Auth::user()->role }}</b></h3>
                    <li id="switch-roles">
                        <h3>Switch role</h3>
                        <form action="{{ route('switch-role.update') }}" method="post" id="formName">
                            @csrf
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                            <label class="switch">
                                <input type="checkbox" name="switch_role" value="learner"
                                    onchange="document.getElementById('formName').submit()">
                                <span class=" slider round"></span>
                            </label>
                            <!-- <button type="submit" value="Submit">DE</button> -->
                        </form>

                    </li>
                    <li><a href="#yourprofile">Your profile</a></li>
                    <li>
                        <a href="#signout">Sign Out</a>
                    </li>
                </ul>
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