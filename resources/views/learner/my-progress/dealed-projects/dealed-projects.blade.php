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
        @if(session('message'))
        <div class="success">
            {{session('message')}}
        </div>
        @endif
        @foreach($applier as $apl)
        @if( $apl->threads_post_projects->status != 0 && $apl->status != 0 )
        <div class="dealed-projects-content">
            <div class="dealed-projects-content-wrapper">
                <div class="project-links">
                    <!-- Your Project -->
                    <div class="your-project">
                        <!-- <a href="/view/my-progress/dealed-projects/project-details/" class="details-links">Details</a> -->
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
                                            $applier_price = number_format($apl->apply_price, 0, ",", ".");
                                        ?>
                                        <h3>Duration : {{$apl->threads_post_projects->offered_duration}}</h3>
                                        <h3>Fix Price :
                                            Rp {{ $applier_price }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="arrow" id="arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>

                            </div>
                            <!-- LEARNER THREAD CONTENT -->
                        </div>

                        @if($apl->status == 2 && $apl->threads_post_projects->status != 2)
                        <div class="accept-order-btn">
                            <form action="/accept-order" method="post">
                                @csrf
                                <input type="text" value="{{$apl->id}}" name="applier_id" hidden>
                                <input type="text" value="{{$apl->user_id}}" name="user_id" hidden>
                                <input type="text" value="{{$apl->threads_post_projects_id}}"
                                    name="threads_post_projects_id" hidden>

                                <input type="number" name="applier_price" value="{{$apl->apply_price}}" hidden>

                                <button type="submit">Accept Order</button>
                            </form>
                        </div>
                        @elseif($apl->status == 2 && $apl->threads_post_projects->status == 2)
                        <div class="accept-order-btn">
                            <form action="/accept-order" method="post">
                                @csrf
                                <input type="text" value="{{$apl->id}}" name="applier_id" hidden disabled>
                                <input type="text" value="{{$apl->user_id}}" name="user_id" hidden disabled>
                                <input type="text" value="{{$apl->threads_post_projects_id}}"
                                    name="threads_post_projects_id" hidden disabled>

                                <input type="number" name="applier_price" value="{{$apl->apply_price}}" hidden disabled>

                                <button type="submit" disabled>Accept Order</button>
                            </form>
                        </div>
                        @endif
                    </div>
                    <!-- Your Project -->

                    <!-- Accepted Freelances Talents -->

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
                                        <h3>Dealed Price</h3>
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
                                <a
                                    href="/learner/followup/applier/{{$apl->id}}/thread/{{$apl->threads_post_projects_id}}">
                                    Chat Talent
                                </a>
                            </div>
                        </div>
                        <!-- <div class="data-payment">
                            <h3>You already accept the applier. Please do payment to our system to confirm that you
                                are
                                deal with this project.
                                <br>
                                Manual transfer to :
                            </h3>
                            <p>
                                BCA : <span> Course And Service - 250604201</span>
                            </p>
                        </div> -->
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