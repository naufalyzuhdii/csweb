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
                <div class="progress-status">
                    @if($apl->threads_post_projects->status == 1)
                    <h3>Progress Status : <span>On working</span></h3>
                    @elseif($apl->threads_post_projects->status == 2)
                    <h3>Progress Status : <span>Finished</span></h3>
                    @endif
                </div>
                <div class="chat-btn">
                    <a href="">
                        Chat Learner
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <!-- End Of My Activity Applied Job Content Wrapper -->
    </div>
</section>


@endsection