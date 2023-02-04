@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/learner/mythread-learner.css')}}">
@endsection

@section('content')

<section class="mythread-learner">
    <div class="mythread-learner-wrapper">
        <!-- Thread Content Heading -->
        <div class="thread-content-heading">
            <h1> <span>Learner Thread</span> - My Thread </h1>
            <p>See your own all project's threads.</p>
        </div>
        <!-- Thread Content Heading -->


        <!-- THREAD CONTENT WRAPPER -->
        <div class="thread-content-wrapper">

            @if($count == 0)
            <div class="warn">
                <h3>You have no threads</h3>
            </div>
            @elseif( $count > 0)
            @foreach ($threads as $thread)
            @if($thread->user_id == Auth::user()->id)
            <div class="thread-content-learner-wrapper">
                <!-- THREAD CONTENT LEARNER VALID WRAPPER -->
                <div class="thread-content-learner-valid-wrapper">
                    <div class="thread-content-learner-valid">
                        <h3>Status Offer : Valid</h3>
                    </div>
                </div>
                <!-- THREAD CONTENT LEARNER VALID WRAPPER -->

                <!-- THREAD CONTENT LEARNER MAIN -->
                <div class="thread-content-learner-main">
                    <!-- PROFILE LEARNER -->
                    <div class="profile-learner">
                        <div class="profile-learner-image-wrapper">
                            @if($thread->user->image == 'no picture')
                            <div class="profile-learner-image">
                                <img src="{{asset('storage/profile/account.png')}}" alt="">
                            </div>
                            @else
                            <div class="profile-learner-image">
                                <img src="{{asset('storage/profile/'.$thread->user->image)}}" alt="">
                            </div>
                            @endif
                        </div>
                        <div class="profile-learner-role-wrapper">
                            <div class="profile-learner-role">
                                <h2>{{$thread->user->role}}</h2>
                            </div>
                        </div>
                    </div>
                    <!-- PROFILE LEARNER -->

                    <!-- LEARNER THREAD CONTENT -->
                    <div class="learner-thread-content">
                        <div class="learner-thread-name">
                            <h3>{{$thread->user->name}}</h3>
                        </div>
                        <div class="learner-thread-project-title">
                            <div class="title_wrapper">
                                <h3>Project Title</h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p>{{ $thread->project_title }}</p>
                            </div>
                        </div>
                        <div class="learner-thread-project-description">
                            <div class="title_wrapper">
                                <h3>Project Description </h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <p>{{ $thread->description }}</p>
                            </div>
                        </div>
                        <div class="learner-thread-project-required-skills">
                            <div class="title_wrapper">
                                <h3>Required Skills </h3>
                                <h3>:</h3>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>{{$thread->skills_requirement}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="learner-thread-offer">
                            <div class="title_wrapper">
                                <h3>Offer </h3>
                            </div>
                            <div class="learner-thread-offer-detail">
                                <h3>Duration : {{ $thread->offered_duration }}</h3>
                                <h3>Price range :
                                    <!-- Php disini untuk convert format value dari database menjadi
                                    format nominal yang benar secara frontend -->
                                    <?php
                                            $nominal_depan_min = number_format($thread->min_price, 0, ",", ".");
                                            $nominal_depan_max = number_format($thread->max_price, 0, ",", ".");
                                        ?>
                                    <span>Rp {{ $nominal_depan_min }}
                                    </span> - <span>Rp
                                    </span>{{ $nominal_depan_max }}

                                </h3>
                            </div>

                        </div>
                        <div class="learner-thread-bottom-content">
                            <div class="talents-apply-wrapper">
                                <h3 class="talents-apply"><span>2 </span>talent(s) has apply this offer</h3>
                                <h3 class="view-appliers">
                                    <a href="/view/appliers/{{$thread->id}}">View Appliers</a>
                                </h3>
                            </div>
                        </div>
                        <a href="/edit-thread/{{$thread->id}}" class="edit-thread"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <a href="/delete-thread/{{ $thread->id }}" class="delete-thread"><i
                                class="fa-solid fa-trash"></i></a>
                    </div>
                    <!-- LEARNER THREAD CONTENT -->
                </div>
                <!-- THREAD CONTENT LEARNER MAIN -->
            </div>
            @endif
            @endforeach
            @endif



        </div>
        <!-- THREAD CONTENT WRAPPER -->
    </div>
</section>


@endsection