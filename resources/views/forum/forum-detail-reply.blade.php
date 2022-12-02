@extends('template')
<link rel="stylesheet" href="{{asset('css/forum/forum-detail-reply.css')}}">

@section ('content')
<section class="forum-detail-reply">
    <div class="forum-detail-reply-wrapper">
        <div class="your-reply-wrapper">
            <div class="your-profile-image-wrapper">
                <div class="your-profile-image">
                    <img src="{{asset('images/thread/jason.jpg')}}">
                </div>
                <div class="your-profile-askers-name">
                    <h2>Udin Sudrajat</h2>
                </div>
            </div>
            <form action="#" class="forum-form">
                <div class="your-forum-description-reply">
                    <label for="forum-description">Description</label>
                    <textarea id="your-forum-description-reply" name="your-forum-description-reply-content"
                        placeholder="Type your description...">
                    </textarea>
                </div>
                <button class="post-btn">
                    Post
                </button>
            </form>
        </div>
        <div class="others-reply-wrapper">

        </div>
    </div>
</section>

@endsection
