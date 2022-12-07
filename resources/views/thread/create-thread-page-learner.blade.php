@extends('navigation.learner-template')
<link rel="stylesheet" href="{{asset('/css/thread/create-thread-page-learner.css')}}">



@section('content')

<section class="create-thread-page-learner">
    <div class="create-thread-page-learner-wrapper">
        <div class="profile-learner">
            <div class="profile-learner-image-wrapper">
                <div class="profile-learner-image">
                    <img src="{{asset('images/thread/jason.jpg')}}" alt="">
                </div>
            </div>
            <div class="profile-learner-role-wrapper">
                <div class="profile-learner-role">
                    <h2>Learner</h2>
                </div>
            </div>
        </div>

        <div class="learner-thread-content">
            <div class="learner-thread-name">
                <h2>Jason</h2>
            </div>
            <form action="#">
                <div class="learner-thread-job-title">
                    <h3>Job Title</h3>
                    <input type="text" name="job-title" placeholder="Type what job title you want talents to do...">
                </div>
                <div class="learner-thread-category-wrapper">
                    <div class="category-title">
                        <h3>Category</h3>
                        <input type="text" name="category-title">
                    </div>
                    <div class="sub-category-title">
                        <h3>Sub Category</h3>
                        <input type="text" name="sub-category-title">
                    </div>
                    <div class="topic">
                        <h3>Topic</h3>
                        <input type="text" name="topic">
                    </div>
                </div>
                <div class="learner-thread-description">
                    <h3>Description</h3>
                    <textarea name="learner-thread-description"></textarea>
                </div>

                <div class="learner-offered-things">
                    <div class="offered-duration">
                        <h3>Offered Duration</h3>
                        <input type="text" name="offered-duration">
                    </div>
                    <div class="offered-price">
                        <h3>Offered Price</h3>
                        <input type="number">
                    </div>
                </div>

                <div class="post-thread-btn">
                    <button type="submit">Post Thread</button>
                </div>
            </form>
        </div>

    </div>
</section>

@endsection
