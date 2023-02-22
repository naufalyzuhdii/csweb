@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/applier/applier.css')}}">
@endsection

@section('content')
<section class="applier">

    <div class="thread-wrapper">
        <!-- THREAD CONTENT  -->
        <div class="thread-content">
            <!-- THREAD CONTENT HEADING -->
            <div class="thread-content-heading">
                <h1> <span>Learner Thread</span> - View Appliers </h1>
                <p>As a <i>learner</i> you can look for how many appliers has applied your threads.
                </p>
            </div>
            <!-- THREAD CONTENT HEADING -->

            <!-- THREAD CONTENT WRAPPER -->
            <div class="thread-content-wrapper">
                <div class="thread-content-learner-wrapper">
                    <!-- THREAD CONTENT LEARNER VALID WRAPPER -->
                    <div class="thread-content-learner-valid-wrapper">
                        <div class="thread-content-learner-valid">
                            <h3>
                                Status Offer : @if ($thread->status == 0) Valid
                                @elseif ($thread->status == 1) On Progress
                                @else Finished

                                @endif
                            </h3>
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
                                    <img src="{{asset('profile/account.png')}}" alt="">
                                </div>
                                @else
                                <div class="profile-learner-image">
                                    <img src="{{asset('profile/'.$thread->user->image)}}" alt="">
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
                                        <li>{{$thread->skills->name}}</li>
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


                        </div>
                        <!-- LEARNER THREAD CONTENT -->
                    </div>
                    <!-- THREAD CONTENT LEARNER MAIN -->
                </div>


                <div class="pagination">
                </div>
            </div>
            <!-- THREAD CONTENT WRAPPER -->

            <div class="appliers-content-wrapper">
                <h3>Appliers</h3>

                @if(count($applier) == 0)
                <div class="warn" style="margin-left:1rem">
                    <h3>No appliers yet</h3>
                </div>
                @else

                <h3 style="font-weight:500;"> <span style="font-weight:600;color:var(--deepblue)">{{$count}}</span>
                    appliers
                    has been apply
                    this thread</h3>
                @foreach($applier as $apl)
                <!-- THREAD CONTENT WRAPPER -->
                <div class="thread-content-wrapper">
                    <div class="thread-content-applier-wrapper">
                        <!-- THREAD CONTENT LEARNER VALID WRAPPER -->
                        <div class="thread-content-learner-valid-wrapper">
                            <div class="thread-content-learner-valid">
                                <!-- <h3>
                                    Status Offer : @if ($apl->threads_post_projects->status == 0) Valid
                                    @elseif ($apl->threads_post_projects->status == 1) On Progress
                                    @else Finished

                                    @endif
                                </h3> -->
                            </div>
                        </div>
                        <!-- THREAD CONTENT LEARNER VALID WRAPPER -->

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
                                        <img src="{{asset('profile/'.$apl->user->image)}}" alt="">
                                    </div>
                                    @endif
                                </div>
                                <div class="profile-learner-role-wrapper">
                                    <div class="profile-learner-role">
                                        <h2>Talent</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- PROFILE LEARNER -->

                            <!-- LEARNER THREAD CONTENT -->
                            <div class="learner-thread-content">
                                <div class="learner-thread-name" style="color:white;">
                                    <h3 style="color:white;text-transform:capitalize">{{$apl->user->name}}</h3>
                                </div>
                                <div class="learner-thread-project-title">
                                    <div class="title_wrapper" style="color:white;">
                                        <h3>Applied Price</h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <?php
                                            $apply_price = number_format($apl->apply_price, 0, ",", ".");
                                        ?>
                                        <p style="color:white;font-weight:500">Rp. {{ $apply_price }}</p>
                                    </div>
                                </div>
                                <div class="learner-thread-project-description">
                                    <div class="title_wrapper" style="color:white;font-weight:500">
                                        <h3>Applier Description </h3>
                                        <h3>:</h3>
                                    </div>
                                    <div class="content">
                                        <p style="color:white;font-weight:500"> {{ $apl->description }}</p>
                                    </div>



                                </div>
                                <form action="/accept_talent" form="accept_applier_form" class="accept_applier_form">
                                    <input type="text" name="applier_id" value="{{$apl->id}}" hidden>
                                    <input type="text" name="threads_post_projects_id"
                                        value="{{$apl->threads_post_projects_id}}" hidden>

                                    <button type="submit" class="accept_btn">
                                        Accept
                                    </button>
                                </form>
                            </div>
                            <!-- LEARNER THREAD CONTENT -->
                        </div>
                        <!-- THREAD CONTENT LEARNER MAIN -->



                    </div>


                    <div class="pagination">
                    </div>
                </div>
                <!-- THREAD CONTENT WRAPPER -->
                @endforeach

                @endif

            </div>








        </div>
        <!-- THREAD CONTENT  -->
    </div>

</section>


{{-- @dd($applier) --}}

@endsection