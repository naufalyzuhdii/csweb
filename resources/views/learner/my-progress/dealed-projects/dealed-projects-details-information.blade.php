@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet"
    href="{{asset('css/learner/my-progress/dealed-projects/dealed-projects-details-information.css')}}">
@endsection

@section('content')
<section class="dealed-projects-details-information">
    <div class="deadled-projects-details-information-wrapper">
        <div class="dealed-projects-details-information-header">
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

        </div>
    </div>
</section>

@endsection