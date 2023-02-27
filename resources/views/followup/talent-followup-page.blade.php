@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/followup/talent-followup-page.css')}}">
@endsection

@section('content')
<section class="talent-followup-page">
    <div class="talent-followup-page-wrapper">
        <div class="heading">
            <h2>Follow Up Your Learner</h2>
            <h3>Learner's name : {{$applier->threads_post_projects->user->name}}</h3>
            <h3>Project : {{$applier->threads_post_projects->project_title}} </h3>
        </div>
        @if(session('message'))
        {{session('message')}}
        @endif
        <div class="content-wrapper">
            <div class="heading-followup">
                <div class="profile-image">
                    @if($applier->user->image == 'no picture')
                    <img src="{{asset('profile/account.png')}}" alt="">
                    @else
                    <img src="{{asset('profile/'.$applier->threads_post_projects->user->image)}}" alt="">
                    @endif
                </div>
                <div class="profile-name">
                    <h3> {{$applier->threads_post_projects->user->name}} - <span>Learner</span></h3>
                </div>
            </div>
            <div class="followup-content" id="scroll-to-bottom">
                @foreach($followup as $chat)
                @if($chat->user_id == auth()->user()->id)
                <div class="sender">
                    <h3 class="from-sender">{{$chat->description}}</h3>
                    @if($chat->file != null)
                    <embed src="{{asset('file/'. $chat->file)}}" type="image/png">
                    @endif
                </div>
                @else
                <div class="receiver">
                    <h3 class="from-receiver">{{$chat->description}}</h3>
                    @if($chat->file != null)
                    <embed src="{{asset('file/'. $chat->file)}}" type="image/png">
                    @endif
                </div>
                @endif
                @endforeach
            </div>
            <div class="reply-bar">
                <form action="/upload_attachment_talent" id="reply-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
                    <input type="text" name="threads_post_projects_id" value="{{$applier->threads_post_projects_id}}"
                        hidden>
                    <textarea name="description" placeholder="Chat with your talent"></textarea>
                    <div class="form-group">
                        <label for="file-input">
                            <i class="fa fa-upload"></i>
                            Choose file
                        </label>
                        <input id="file-input" type="file" name="file" style="display:none">
                    </div>
                </form>

                <div class="button-send">
                    <button type="submit" form="reply-form">
                        Send
                    </button>
                </div>
            </div>
            @error('file')
            <div class="danger">
                {{$message}}
            </div>
            @enderror
            @error('description')
            <div class="danger">
                {{$message}}
            </div>
            @enderror
        </div>

    </div>
</section>
<script>
window.onload = function() {
    var scrollableDiv = document.getElementById('scroll-to-bottom');
    scrollableDiv.scrollTop = scrollableDiv.scrollHeight - scrollableDiv.clientHeight;
}
</script>




@endsection