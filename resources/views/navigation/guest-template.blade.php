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
                            {{-- @foreach ($parentcategories as $category) 
                                
                                    <li><a href="/show_course_by_category/{{$category->id}}">{{ $category->name }}<i class="fa-sharp fa-solid fa-play"></i></a>
                                        @if (count($category->subcategory))
                                            @include('navigation.subcategory', ['subcategories' => $category->subcategory])
                                        @endif
                                    </li>
                                
                            @endforeach --}}
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