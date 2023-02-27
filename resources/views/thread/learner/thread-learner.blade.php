@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/learner/thread-learner.css')}}">


@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<section class="thread">
    <div class="thread-wrapper">
        <!-- THREAD CONTENT  -->
        <div class="thread-content">
            <!-- THREAD CONTENT HEADING -->
            <div class="thread-content-heading">
                <h1> <span>Learner Thread</span> - Post a Project </h1>
                <p>As a <i>learner</i> you can look for freelancers or talents to work on your projects or tasks. By
                    posting a
                    thread, freelancers or talents
                    can apply the thread that you posted since they deal with the requirements.
                    <br><br>
                    Here, you can create and post your own thread project by clicking button "create thread".
                </p>
            </div>
            <!-- THREAD CONTENT HEADING -->

            <!-- THREAD BTN WRAPPER -->
            <div class="thread-btn-wrapper">
                <div class="thread-btn">
                    <!-- View My Thread -->
                    <div class="view-my-thread-btn-wrapper">
                        <div class="view-my-thread-btn">
                            <a href="/view/threads-post-project/learner/mythread/{{ Auth::user()->id }}">
                                My Thread
                            </a>
                        </div>
                    </div>
                    <!-- View My Thread -->

                    {{-- Create Thread --}}
                    <div class="create-thread-btn-wrapper">
                        <div class="create-thread-btn">
                            <a href="/view/threads-post-project/learner/create-thread">
                                Create Thread
                            </a>
                        </div>
                    </div>
                    {{-- End Of Create Thread --}}
                </div>
            </div>
            <!-- THREAD BTN WRAPPER -->

            @if(session()->has('success-deleted'))
            <div class="success">
                {{session()->get('success-deleted')}}
            </div>
            @endif

            <!-- THREAD CONTENT WRAPPER -->
            <div class="thread-content-wrapper">
                @if (count($threads) == 0)
                <div class="warn">
                    <h3>No Data</h3>
                </div>
                @elseif (count($threads) > 0)

                @foreach ($threads as $thread)

                @if($thread->status == 0)
                <div class="thread-content-learner-wrapper">
                    <!-- THREAD CONTENT LEARNER VALID WRAPPER -->
                    <div class="thread-content-learner-valid-wrapper">
                        <div class="thread-content-learner-valid">
                            @if ($thread->status == 0)
                            <h3> Status Offer : <span>Valid</span></h3>
                            @elseif ($thread->status == 1)
                            <h3> Status Offer : <span>On Progress</span></h3>
                            @else
                            <h3> Status Offer : <span>Finished</span></h3>
                            @endif
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
                                    <h3 class="talents-apply"><span style="margin-right:.25rem;"> {{$count}}</span>
                                        talent(s) has apply this
                                        offer</h3>
                                    <h3 class="view-appliers">
                                        <a href="/view/appliers/{{$thread->id}}">View Appliers</a>
                                    </h3>
                                </div>
                            </div>

                        </div>
                        <!-- LEARNER THREAD CONTENT -->
                    </div>
                    <!-- THREAD CONTENT LEARNER MAIN -->
                </div>
                <!-- </a> -->
                @else

                @endif
                @endforeach

                @endif

                <div class="pagination">
                    {{ $threads->links() }}
                </div>
            </div>
            <!-- THREAD CONTENT WRAPPER -->
        </div>
        <!-- THREAD CONTENT  -->
    </div>
</section>

@endsection