@extends('template')
<link rel="stylesheet" href="{{asset('css/forum/forum-detail-reply.css')}}">

@section ('content')
<section class="forum-detail-reply">
    <div class="forum-detail-reply-wrapper">
        <div class="forum-detail-reply-header">
            <h1>Related Forum Replies</h1>
        </div>
        {{-- ASKING FORUM --}}
        <div class="askers-forum">
            <div class="askers-forum-images-wrapper">
                <div class="askers-forum-images">
                    <img src="{{asset('images/course/talent-1.jpg')}}">
                </div>
            </div>
            <div class="askers-forum-content-wrapper">
                <div class="askers-name">
                    <h2>Jason Petot</h2>
                </div>
                <div class="askers-forum-title">
                    <h2>Mau tanya tentang HMTL ?</h2>
                </div>
                <div class="askers-forum-description">
                    <p>Saya bingung niehhhhh aduhhh</p>
                </div>
                <div class="askers-forum-reaction">
                    <div class="replies-wrapper">
                        <i class="fa-solid fa-reply"></i>
                        <span>10</span>
                        <h4>Replies</h4>
                    </div>
                    <div class="viewer-wrapper">
                        <i class="fa-solid fa-eye"></i>
                        <span>400</span>
                        <h4>Viewers</h4>
                    </div>
                    <div class="time-wrapper">
                        <h4>30m ago</h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- ASKING FORUM --}}

        <div class="line">
            <hr>
        </div>

        {{-- YOUR REPLY FORUM --}}
        <div class="your-reply-forum">
            <div class="your-profile-image-wrapper">
                <div class="your-profile-image">
                    <img src="{{asset('images/thread/jason.jpg')}}">
                </div>
                <div class="your-profile-reply-name">
                    <h2>Udin Sudrajat</h2>
                </div>
            </div>
            <form action="#" class="your-forum-form">
                <div class="your-forum-reply-answer">
                    <label for="your-forum-reply-answer">Your answer</label>
                    <textarea id="your-forum-reply-answer" name="your-forum-reply-answer-content"
                        placeholder="Type your answer...">
                    </textarea>
                </div>
                <button class="reply-btn">
                    Reply
                </button>
            </form>
        </div>
        {{-- YOUR REPLY FORUM --}}
        {{-- OTHERS REPLY WRAPPER --}}
        <div class="others-reply-wrapper">
            <div class="others-reply-header">
                <h2>Others replies</h2>
            </div>

            <div class="repliers-forum">
                <div class="repliers-forum-images-wrapper">
                    <div class="repliers-forum-images">
                        <img src="{{asset('images/course/talent-1.jpg')}}">
                    </div>
                </div>
                <div class="repliers-forum-content-wrapper">
                    <div class="repliers-name">
                        <h2>Jason Petot</h2>
                    </div>
                    <div class="repliers-forum-answer">
                        <p>Kalo itu jawbaannya gini broo igingianidsaniasndias</p>
                    </div>
                    <div class="repliers-forum-reaction">

                        <div class="viewer-wrapper">
                            <i class="fa-solid fa-eye"></i>
                            <span>400</span>
                            <h4>Viewers</h4>
                        </div>
                        <div class="time-wrapper">
                            <h4>30m ago</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- OTHERS REPLY WRAPPER --}}
    </div>
</section>

@endsection
