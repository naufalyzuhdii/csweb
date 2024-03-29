{{-- Section Header --}}
<section class="header">
    <div class="navigation">
        <div class="nav-1">
            <a href="/view/talent-home" class="logo">
                <img src="{{asset('images/header/logo-white.png')}}">
            </a>
            <div class="categories-navbar">
                <a href="" class="categories-links">Categories</a>
                <?php
                    $categories = DB::table('categories')->
                    orderBy('name','asc')
                    ->get();
                ?>
                <ul>
                    @foreach($categories as $c)
                    <li>
                        <a href="/categories/{{$c->id}}">
                            {{$c->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="thread-navbar">
                <a href="/view/threads-apply-job/talent"> Jobs</a>
            </div>
        </div>

        <div class="search-navbar">
            <form class="search-bar" action="/view/course" method="get">
                <input type="search" name="search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>

        <div class="nav-2">
            <div class="my-activity">
                <a href="/view/my-activity-applied-jobs">
                    My Activity
                </a>
            </div>
            <div class="my-course">
                <a href="/view/my-courses">
                    My Courses
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
                                <h3 id="switchRole">Switch role</h3>
                                <label class="switch">
                                    <input type="checkbox" name="switch_role" value="learner"
                                        onchange="document.getElementById('formName').submit()">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </form>
                    </li>
                    <li><a href="/profile/{{auth()->user()->id}}">Your profile</a></li>
                    <li><a href="/balance/{{auth()->user()->id}}">My Balance</a></li>
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