<section class="header">
    <div class="navigation">

        <div class="nav-2">
            <div class="progress-navbar">
                <a href="" class="progress-navbar-links" id="progress-navbar-links">
                    My Progress
                </a>
                <ul>
                    <li> <a href="/view/my-progress/dealed-projects">Dealed Projects</a></li>
                    <li> <a href="/view/my-progress/">My Posted Projects</a></li>
                </ul>
            </div>
            <div class="course-navbar">
                <a href="/view/my-learning" class="course-navbar-links" id="course-navbar-links">
                    My Learning
                </a>
            </div>

            <div class="profile-navbar">
                <a href="#profile" class="profile-navbar-links">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul>
                    <h2>Hi, {{ old('name', Auth::user()->name) }}</h2>
                    <h3>You signed in as <b>{{ Auth::user()->role }}</b></h3>
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