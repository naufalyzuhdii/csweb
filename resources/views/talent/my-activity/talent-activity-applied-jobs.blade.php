@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-activity/talent-activity-applied-jobs.css')}}">
@endsection

@section('content')
<section class="talent-activity-applied-jobs">
    <div class="section-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Activity</span> - Applied Jobs </h1>
            <p>Here as a <i>talent</i>, you can track and see your activity progress of your applied jobs.
            </p>
        </div>
        <!-- End Of Title Heading -->

        <!-- My Activity Applied Job Content Wrapper -->
        <div class="my-activity-applied-job-content-wrapper">
            @if(session('message'))
            <div class="success">
                {{session('message')}}
            </div>
            @endif
            @foreach($applier as $apl)
            @if( $apl->threads_post_projects->status != 0 )
            <div class="applied-job-content-item">
                <div class="profile-learner">
                    <div class="profile-learner-image-wrapper">
                        @if($apl->user->image == 'no picture')
                        <div class="profile-learner-image">
                            <img src="{{asset('profile/account.png')}}" alt="">
                        </div>
                        @else
                        <div class="profile-learner-image">
                            <img src="{{asset('profile/'.$apl->threads_post_projects->user->image)}}" alt="">
                        </div>
                        @endif
                    </div>
                    <div class="profile-learner-role-wrapper">
                        <div class="profile-learner-role">
                            <h2>Learner</h2>
                        </div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <h3 class="learner-name">{{$apl->threads_post_projects->user->name}}</h3>
                    <div class="package-wrapper">
                        <div class="project-title">
                            <div class="title_wrapper">
                                <h3>Project Name</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p>
                                    {{ $apl->threads_post_projects->project_title }}
                                </p>
                            </div>
                        </div>
                        <div class="project-description">
                            <div class="title_wrapper">
                                <h3> Project Description</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p>
                                    {{ $apl->threads_post_projects->description }}
                                </p>
                            </div>
                        </div>
                        <div class="offer-wrapper">
                            <div class="duration">
                                <div class="title_wrapper">
                                    <h3> Duration </h3>
                                    <h3>:</h3>
                                </div>
                                <div class="content">
                                    <p>
                                        {{ $apl->threads_post_projects->offered_duration }}
                                    </p>
                                </div>
                            </div>
                            <div class="price-range">
                                <div class="title_wrapper">
                                    <h3>Dealed Price </h3>
                                    <h3>:</h3>
                                </div>
                                <div class="content">
                                    <?php
                                        $fix_price = number_format($apl->threads_post_projects->fix_price, 0, ",", ".");
                                    ?>
                                    <p>
                                        Rp. {{ $fix_price }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="learner-status-order">
                    @if($apl->threads_post_projects->status == 1)
                    <h3>Status order : <span>Not accepted yet</span></h3>
                    @elseif($apl->threads_post_projects->status == 2)
                    <h3>Status order : <span>Order accepted</span></h3>
                    @endif
                </div>
                <div class="progress-status">
                    @if($apl->status == 1)
                    <h3>Project Status : <span>On working</span></h3>
                    @elseif($apl->status == 2)
                    <h3>Project Status : <span>Finished</span></h3>
                    @endif
                </div>
                <div class="chat-btn">
                    <a href="/talent/followup/applier/{{$apl->id}}/thread/{{$apl->threads_post_projects_id}}">
                        Chat Learner
                    </a>
                </div>
                @if($apl->threads_post_projects->status == 1 && $apl->status == 1)
                <div class="finish-btn">
                    <form action="/finish-project" method="post">
                        @csrf
                        <input type="text" value="{{$apl->id}}" name="applier_id" hidden>
                        <input type="text" value="{{$apl->threads_post_projects_id}}" name="threads_post_projects_id"
                            hidden>

                        <button type="submit">Finish Project</button>
                    </form>
                </div>
                @elseif($apl->threads_post_projects->status == 2 && $apl->status == 2)
                <div class="finish-btn">
                    <form action="/finish-project" method="post">
                        @csrf
                        <input type="text" value="{{$apl->id}}" name="applier_id" hidden disabled>
                        <input type="text" value="{{$apl->threads_post_projects_id}}" name="threads_post_projects_id"
                            hidden disabled>

                        <button type="submit" disabled>Finish Project</button>
                    </form>
                </div>
                @endif
            </div>
            @endif
            @endforeach
        </div>
        <!-- End Of My Activity Applied Job Content Wrapper -->
    </div>
</section>


@endsection