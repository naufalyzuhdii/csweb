@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/talent/thread-apply-jobs.css')}}">
@endsection


@section ('content')
<section class="apply-jobs">
    <div class="apply-jobs-wrapper">

        <!-- Thread Content Heading -->
        <div class="thread-content-heading">
            <h1> <span>Talent Thread</span> - Apply Jobs </h1>
            <p>As a <i>talent</i> you can look for jobs by apply projects thread that have been created by learners.
            </p>
        </div>
        <!-- End of Thread Content Heading -->


        <!-- THREAD CONTENT WRAPPER -->
        <div class="thread-content-wrapper">
            @if (count($threads) == 0)
            <div class="warn">
                <h3>No Data</h3>
            </div>
            @elseif (count($threads) > 0)

            @foreach ($threads as $thread)
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
                        <?php
                            $count = DB::table('appliers')->where('threads_post_projects_id',$thread->id)->get()->count();
                        ?>
                        <div class="learner-thread-bottom-content">
                            <div class="talents-apply-wrapper">
                                <h3 class="talents-apply"><span style="margin-right:.25rem;">{{$count}}</span>talent(s)
                                    has apply this offer</h3>
                                <div class="talents-view-btn">
                                    <h3>
                                        <a href="/view/thread-apply-jobs-learner-detail/{{$thread->id}}">View
                                            Detail</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- LEARNER THREAD CONTENT -->
                </div>
                <!-- THREAD CONTENT LEARNER MAIN -->
            </div>
            <!-- </a> -->
            @endforeach
            @endif

        </div>
        <!-- THREAD CONTENT WRAPPER -->
    </div>
</section>



@endsection