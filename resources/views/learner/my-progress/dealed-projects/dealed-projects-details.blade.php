@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/learner/my-progress/dealed-projects/dealed-projects-details.css')}}">
@endsection

@section('content')
<section class="dealed-projects-details">
    <div class="deadled-projects-details-wrapper">
        <div class="dealed-projects-details-header">
            <h1> <span>My Progress</span> - Dealed Projects Details </h1>
            <p>Here is the progress of your dealed projects. Once the project has been done, you can download your own
                finished project's file.</p>
        </div>

        <div class="navigation-wrapper">
            <div class="nav-activity">
                <a href="/view/my-progress/dealed-projects/project-details/">
                    Activity
                </a>
            </div>
            <div class="nav-details">
                <a href="/view/details-information/">
                    Details Information
                </a>
            </div>
        </div>

        <div class="dealed-projects-details-content-activity">
            <div class="activity-day-wrapper">
                <div class="activity-wrapper">
                    <h3><span>Udin Petot</span> is working on your projects.</h3>
                    <h4>20 February 2023 | <span>13:00</span></h4>
                </div>
                <div class="uploaded-wrapper">
                    <embed src="/images/course/talent-1.jpg" type="application/pdf" width="300" height="200">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection