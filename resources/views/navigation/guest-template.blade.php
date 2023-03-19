{{-- Section Header --}}
<section class="header">
    <div class="navigation">
        <div class="nav-1">
            <a href="/" class="logo">
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
                <a href="/view/thread-learner" class="thread-links">Thread</a>
            </div>
        </div>
        <div class="search-navbar">
            <form class="search-bar" action="/view/course" method="get">
                <input type="search" name="search" placeholder="Search">
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