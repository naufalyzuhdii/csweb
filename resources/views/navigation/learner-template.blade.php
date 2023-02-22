{{-- Section Header --}}
<section class="header">
    <div class="navigation">


        <div class="nav-1">
            <a href="/view/learner-home" class="logo">
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
                <a href="/view/threads-post-project/learner">Thread</a>
            </div>
        </div>

        <div class="search-navbar">
            <form class="search-bar" action="#" method="get">
                <input type="search" name="keyword" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>

        <div class="nav-2">
            <div class="progress-navbar">
                <a href="/view/my-progress/dealed-projects" class="progress-navbar-links" id="progress-navbar-links">
                    My Progress
                </a>
            </div>
            <div class="course-navbar">
                <a href="/view/my-learning/{{Auth::user()->id}}" class="course-navbar-links" id="course-navbar-links">
                    My Learning
                </a>
            </div>

            <div class="profile-navbar">
                @if(auth()->user()->image == 'no picture')
                <a href="#profile" class="profile-navbar-links">
                    <img src="{{asset('profile/account.png')}}" alt="">
                </a>
                @else
                <a href="#profile" class="profile-navbar-links">
                    <img src="{{url('profile/'.auth()->user()->image)}}" alt="">
                </a>
                @endif

                <ul>
                    <h2>Hi, {{ old('name', Auth::user()->name) }}</h2>
                    <h3>You signed in as <b>{{ Auth::user()->role }}</b></h3>
                    <li id="switch-roles">

                        <form action="{{ route('switch-role.update') }}" method="post" id="formName">
                            @csrf
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <div class="switch-roles-wrapper">
                                @if(Auth::user()->certification_status == 'none')
                                <h3 class="switchRole">Switch role</h3>
                                <label class="switch">
                                    <input type="checkbox" name="switch_role" value="talent"
                                        onchange="document.getElementById('formName').submit()" onclick="return false;">
                                    <span class="slider round"></span>
                                </label>
                                @else
                                <h3>Switch role</h3>
                                <label class="switch">
                                    <input type="checkbox" name="switch_role" value="talent"
                                        onchange="document.getElementById('formName').submit()" onclick="return true;">
                                    <span class="slider round"></span>
                                </label>
                                @endif


                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="/view/learner/cart" class="cart"> My
                            Cart</a>
                    </li>
                    <li><a href="/profile/{{auth()->user()->id}}">Your profile</a></li>
                    <li>
                        <a href="/signout">Sign Out</a>
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