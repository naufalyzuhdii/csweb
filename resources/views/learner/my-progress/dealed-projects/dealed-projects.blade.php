@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-progress/dealed-projects/dealed-projects.css')}}">
@endsection

@section('content')
<section class="dealed-projects">
    <div class="dealed-projects-wrapper">
        <!-- Dealed Projects Header-->
        <div class="dealed-projects-header">
            <h1> <span>My Progress</span> - Dealed Projects </h1>
            <p>Here is your accepted Freelances and Talents progress.</p>
        </div>
        <!-- Dealed Projects Header-->

        {{-- @dd($progress) --}}

        <!-- Dealed Projects Content -->
        @if(count($applier) == 0)
        <div class="warn">
            <h3>
                You have no dealed projects with any appliers yet.
            </h3>
        </div>
        @else
        @foreach($applier as $apl)
        @if( $apl->threads_post_projects->status != 0 && $apl->status != 0 )
        <div class="dealed-projects-content">
            <div class="dealed-projects-content-wrapper">
                <div class="project-links">
                    <!-- Your Project -->
                    <div class="your-project">
                        <a href="/view/my-progress/dealed-projects/project-details/" class="details-links">Details</a>
                        <div class="thread-content-learner-valid">
                            @if($apl->threads_post_projects->status == 1)
                            <h3> Status : <span>On working</span></h3>
                            @elseif($apl->threads_post_projects->status == 2)
                            <h3> Status : <span>Finished</span></h3>
                            @endif
                        </div>
                        <!-- THREAD CONTENT LEARNER MAIN -->
                        <div class="thread-content-learner-main">
                            <!-- PROFILE LEARNER -->
                            <div class="profile-learner">
                                <div class="profile-learner-image-wrapper">
                                    @if($apl->threads_post_projects->user->image == 'no picture')
                                    <div class="profile-learner-image">
                                        <img src="{{asset('profile/account.png')}}" alt="">
                                    </div>
                                    @else
                                    <div class="profile-learner-image">
                                        <img src="{{asset('profile/'.$apl->threads_post_projects->user->image )}}"
                                            alt="">
                                    </div>
                                    @endif
                                </div>
                                <div class="profile-learner-role-wrapper">
                                    <div class="profile-learner-role">
                                        <h2>Learner</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- PROFILE LEARNER -->

                            <!-- LEARNER THREAD CONTENT -->
                            <div class="learner-thread-content">
                                <div class="learner-thread-name">
                                    <h3>{{ $apl->threads_post_projects->user->name }}</h3>
                                </div>
                                <div class="learner-thread-project-title">
                                    <div class="title_wrapper">
                                        <h3>Project Title</h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <p>{{ $apl->threads_post_projects->project_title }}</p>
                                    </div>
                                </div>
                                <div class="learner-thread-project-description">
                                    <div class="title_wrapper">
                                        <h3>Project Description </h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <p>{{ $apl->threads_post_projects->description }}</p>
                                    </div>
                                </div>
                                <div class="learner-thread-project-required-skills">
                                    <div class="title_wrapper">
                                        <h3>Required Skills </h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>{{ $apl->threads_post_projects->skills->name }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="learner-thread-offer">
                                    <div class="title_wrapper">
                                        <h3>Offer </h3>
                                    </div>
                                    <div class="learner-thread-offer-detail">
                                        <?php
                                            $min_price = number_format($apl->threads_post_projects->min_price, 0, ",", ".");
                                            $max_price = number_format($apl->threads_post_projects->max_price, 0, ",", ".");
                                        ?>
                                        <h3>Duration : </h3>
                                        <h3>Price range : <span>Rp {{ $min_price }}</span> -
                                            <span>Rp {{ $max_price }}
                                            </span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="arrow" id="arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>

                            </div>
                            <!-- LEARNER THREAD CONTENT -->
                        </div>
                    </div>
                    <!-- Your Project -->

                    <!-- Accepted Freelances Talents -->
                    {{-- @dd($talent) --}}

                    <div class="accepted-freelances-talents">
                        <div class="freelances-talents-data">
                            <div class="appliers-picture">
                                @if($apl->user->image == 'no picture')
                                <div class="appliers-picture-wrapper">
                                    <img src="{{asset('profile/account.png')}}" alt="">
                                </div>
                                @else
                                <div class="appliers-picture-wrapper">
                                    <img src="{{asset('profile/'.$apl->user->image)}}" alt="">
                                </div>
                                @endif
                            </div>
                            <div class="appliers-data">
                                <div class="appliers-name">
                                    <h3>{{$apl->user->name}}</h3>
                                </div>
                                <div class="appliers-offered-price">
                                    <div class="title_wrapper_applier">
                                        <h3>Offered Price</h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content_applier">
                                        <?php
                                            $apply_price = number_format($apl->apply_price, 0, ",", ".");
                                        ?>
                                        <h3>Rp. {{$apply_price}}</h3>
                                    </div>
                                </div>
                                <div class="appliers-offered-description">
                                    <div class="title_wrapper_applier_description">
                                        <h3>Offered Description</h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content_applier_description">
                                        <h3>{{$apl->description}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-btn">
                                <a href="">
                                    Chat Talent
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Accepted Freelances Talents -->
                </div>
            </div>
        </div>
        @endif
        @endforeach


        @endif

        <!-- Dealed Projects Content -->
    </div>
</section>


<script>
var yourProject = document.querySelectorAll(".your-project");
yourProject.forEach((yourProject) => {
    yourProject.addEventListener("click", () => {
        yourProject.classList.toggle("change");
        const parent = yourProject.parentNode;
        parent.classList.toggle("active");

    });
});
</script>

@endsection