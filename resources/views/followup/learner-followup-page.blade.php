@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/followup/learner-followup-page.css')}}">
@endsection

@section('content')
<section class="learner-followup-page">
    <div class="learner-followup-page-wrapper">
        <div class="heading">
            <h2>Follow Up Your Talent</h2>
            <h3>Talent's name : <span>{{$applier->user->name}}</span></h3>
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
                    <img src="{{asset('profile/'.$applier->user->image)}}" alt="">
                    @endif
                </div>
                <div class="profile-name">
                    <h3> {{$applier->user->name}} - <span>Talent</span></h3>
                </div>
            </div>
            <div class="followup-content" id="scroll-to-bottom">
                @foreach($followup as $chat)
                @if($chat->user_id == auth()->user()->id)
                <div class="sender">
                    <h4>
                        {{ $chat->created_at->setTimezone('Asia/Bangkok')->format('d-M-Y H:i:s') }}
                    </h4>
                    @if($chat->description != null)
                    <h3 class="from-sender">{{$chat->description}}</h3>
                    @endif
                    @if($chat->file != null)
                    <embed src="{{asset('file/'. $chat->file)}}" type="application/pdf">
                    @endif
                </div>
                @else
                <div class="receiver">
                    <h4>
                        {{ $chat->created_at->setTimezone('Asia/Bangkok')->format('d-M-Y H:i:s') }}
                    </h4>
                    @if($chat->description != null)
                    <h3 class="from-receiver">{{$chat->description}}</h3>
                    @endif
                    @if($chat->file != null)
                    <embed src="{{asset('file/'. $chat->file)}}" type="application/pdf">
                    @endif
                </div>
                @endif
                @endforeach
            </div>
            <div class="reply-bar">
                <form action="/upload_attachment_learner" id="reply-form" method="post" enctype="multipart/form-data">
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
        </div>
        @if ($errors->any())
        <div class="danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
</section>

<script>
window.onload = function() {
    var scrollableDiv = document.getElementById('scroll-to-bottom');
    scrollableDiv.scrollTop = scrollableDiv.scrollHeight - scrollableDiv.clientHeight;
}
</script>
@endsection