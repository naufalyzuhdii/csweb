@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/learner/thread-talent-detail.css')}}">
@endsection

@section('content')

<section class="thread-talent-detail">
    <div class="thread-talent-detail-wrapper">
        <div class="thread-content">
            {{-- Thread Content Heading --}}
            <div class="thread-content-heading">
                <h1> <span>Learner Thread</span> - Talent Shop Detail </h1>
                <p>In Talent Shop Detail, you can see what kind of services that freelancer or talents serve at their
                    shop, their description skills, ratings and reviews. Once all the things are good for you, you can
                    order the services.
                </p>
            </div>
            {{-- Thread Content Heading --}}

            {{-- Thread Content Header --}}
            <div class="thread-content-header">
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
                                <div class="title_wrapper">
                                    <h3>Services </h3>
                                    <h3>:</h3>
                                </div>
                                <div class="content">
                                    <p>I can do Website Development with ReactJs, HTML, CSS, Bootstrap</p>
                                </div>
                            </div>
                            <div class="talent-thread-offer">
                                <div class="talent-thread-offer-detail">
                                    <div class="title_wrapper">
                                        <h3>Start Price </h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <p>Rp. 300.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="talent-thread-bottom-content">
                                <div class="review-wrapper">
                                    <h4>Review</h4>
                                    <p>
                                        <i class="fa-solid fa-star"></i>
                                        <span id="rating">4.8</span>
                                        <span>(1000)</span>
                                    </p>
                                </div>
                                <a href="" class="chat-btn">
                                    <div class="chat-btn-wrapper">
                                        <h3>Chat to talent</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Thread Content Header --}}

            {{-- Thread Content Main --}}
            <div class="thread-content-main">
                <div class="thread-content-main-wrapper">

                    <!-- Thread Content Description -->
                    <div class="thread-content-description">
                        <h4>Description</h4>
                        <p>I will create a custom website development with many of framework such as Laravel,
                            JavaScript, ReactJs and etc. As a learner you can
                            do request any improvement of the website development. You can also choose a variation of
                            services package that i serve here.</p>
                    </div>
                    <!-- Thread Content Description -->

                    <!-- Thread Content Package -->
                    <div class="thread-content-package">
                        <h4>Package</h4>
                        <form action="">
                            <div class="package-wrapper">
                                <ul class="radio-wrapper">
                                    <li>
                                        <input type="radio" name="package" id="radio-1" value="1">
                                        <label for="radio-1" class="myPackage">
                                            <!-- <div class="myPackage"> -->
                                            <div class="package-title">
                                                <h2>Reguler</h2>
                                            </div>
                                            <div class="package-description">
                                                <p>Includes navigation, background
                                                    slide, social media button, and
                                                    source file</p>
                                            </div>
                                            <div class="package-list">
                                                <ul>
                                                    <li>
                                                        <h4>2 Days Delivery</h4>
                                                    </li>
                                                    <li>
                                                        <h4>2 Maximum revision</h4>
                                                    </li>
                                                    <li>
                                                        <h4>Requested Framework</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="package-price">
                                                <h3>Rp. 300.000</h3>
                                            </div>
                                            <!-- </div> -->
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" name="package" id="radio-3" value="3">
                                        <label for="radio-3" class="myPackage">
                                            <!-- <div class="myPackage"> -->
                                            <div class="package-title">
                                                <h2>Medium</h2>
                                            </div>
                                            <div class="package-description">
                                                <p>Includes navigation, background
                                                    slide, social media button, and
                                                    source file</p>
                                            </div>
                                            <div class="package-list">
                                                <ul>
                                                    <li>
                                                        <h4>2 Days Delivery</h4>
                                                    </li>
                                                    <li>
                                                        <h4>2 Maximum revision</h4>
                                                    </li>
                                                    <li>
                                                        <h4>Requested Framework</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="package-price">
                                                <h3>Rp. 500.000</h3>
                                            </div>
                                            <!-- </div> -->
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" name="package" id="radio-2" value="2">
                                        <label for="radio-2" class="myPackage">
                                            <!-- <div class="myPackage"> -->
                                            <div class="package-title">
                                                <h2>Premium</h2>
                                            </div>
                                            <div class="package-description">
                                                <p>Includes navigation, background
                                                    slide, social media button, and
                                                    source file</p>
                                            </div>
                                            <div class="package-list">
                                                <ul>
                                                    <li>
                                                        <h4>2 Days Delivery</h4>
                                                    </li>
                                                    <li>
                                                        <h4>2 Maximum revision</h4>
                                                    </li>
                                                    <li>
                                                        <h4>Requested Framework</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="package-price">
                                                <h3>Rp. 600.000</h3>
                                            </div>
                                            <!-- </div> -->
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-btn">
                                <button value="submit">Order</button>
                            </div>
                        </form>

                    </div>
                    <!-- Thread Content Package -->

                    <!-- Thread Content Ratings -->
                    <div class="thread-content-ratings">
                        <h4>Ratings</h4>
                        <div class="thread-content-ratings-wrapper">
                            <div class="rating-list">
                                <h4>
                                    Talent's services
                                </h4>
                                <div class="rating-icon">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="rating-list">
                                <h4>
                                    Talent's communication
                                </h4>
                                <div class="rating-icon">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Thread Content Ratings -->

                    <!-- Thread Content Reviews -->
                    <div class="thread-content-reviews">
                        <h4>Reviews</h4>
                        <h3>(200 reviews)</h3>
                        <div class="thread-content-reviews-wrapper">
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-time">
                                    <h4>1 month ago</h4>
                                </div>
                                <div class="review-content-wrapper">
                                    <div class="reviewer-image-wrapper">
                                        <div class="reviewer-image">
                                            <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="reviewer-content">
                                        <div class="reviewer-name">
                                            <h3>Junaedi</h3>
                                        </div>
                                        <div class="reviewer-description">
                                            <p>The work was great and amazing GILEE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                        </div>
                        <div class="showMore-btn">
                            <a href="#showMore" id="showMore">Show More</a>
                        </div>
                    </div>
                    <!-- Thread Content Reviews -->
                </div>
            </div>
            {{-- Thread Content Main --}}
            <!-- Thread Content Package -->
            <!-- Thread Content Ratings -->
            <div class="thread-content-ratings">
                <h4>Ratings</h4>
                <div class="thread-content-ratings-wrapper">
                    <div class="rating-list">
                        <h4>
                            Talent's services
                        </h4>
                        <div class="rating-icon">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="rating-list">
                        <h4>
                            Talent's communication
                        </h4>
                        <div class="rating-icon">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Thread Content Ratings -->

            <!-- Thread Content Reviews -->
            <div class="thread-content-reviews">
                <h4>Reviews</h4>
                <h3>(200 reviews)</h3>
                <div class="thread-content-reviews-wrapper">
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-time">
                            <h4>1 month ago</h4>
                        </div>
                        <div class="review-content-wrapper">
                            <div class="reviewer-image-wrapper">
                                <div class="reviewer-image">
                                    <img src="{{asset('images/course/talent-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="reviewer-content">
                                <div class="reviewer-name">
                                    <h3>Junaedi</h3>
                                </div>
                                <div class="reviewer-description">
                                    <p>The work was great and amazing GILEE!</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                </div>
                <div class="showMore-btn">
                    <a href="#showMore" id="showMore">Show More</a>
                </div>
            </div>
            <!-- Thread Content Reviews -->
        </div>
    </div>

</section>

<script>
let loadMoreBtn = document.querySelector('#showMore');
let currentItem = 2;

// let boxes = [...document.querySelectorAll('.thread-content-reviews-wrapper .review')];
// alert(boxes.length)



loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.thread-content-reviews-wrapper .review')];

    for (var i = currentItem; i <= currentItem + 1; i++) {
        boxes[i].style.display = "inline-block";
    }

    currentItem += 2;

    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = "none"
    }

}
</script>

@endsection