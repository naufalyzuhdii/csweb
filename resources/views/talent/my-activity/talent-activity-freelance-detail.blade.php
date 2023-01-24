@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-activity/talent-activity-freelance-detail.css')}}">
@endsection

@section('content')
<section class="freelance-detail">
    <div class="section-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Activity</span> - Freelances - Details</h1>
        </div>
        <!-- Title Heading -->

        <!-- Talent Activity Freelance Content Wrapper -->
        <div class="talent-activity-freelance-content-wrapper">
            <div class="freelance-content-item">
                <div class="profile-learner">
                    <div class="profile-learner-image-wrapper">
                        <div class="profile-learner-image">
                            <img src="{{asset('images/thread/jason.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="profile-learner-role-wrapper">
                        <div class="profile-learner-role">
                            <h2>Learner</h2>
                        </div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <h3 class="learner-name">Jason</h3>
                    <div class="package-wrapper">
                        <h3 class="services-text">
                            Services :
                            <span>Create Website Developments with ReactJs</span>
                        </h3>
                        <h3 class="services-package">
                            Package : <span>Medium</span>
                        </h3>
                        <h3 class="services-package-price">
                            Rp. 300.000
                        </h3>
                    </div>
                </div>
                <div class="progress-status">
                    <h3>Progress Status : <span>On working</span></h3>
                </div>
                <div class="chat-button">
                    <h3>
                        <a href="#chat-btn">
                            Chat to learner
                        </a>
                    </h3>
                </div>
                </a>
            </div>
            <!-- End Of Talent Activity Freelance Content Wrapper -->

            <!-- Details Content Wrapper -->

            <div class="details-content-wrapper">
                <h3 class="upload-title">
                    Upload your final work to learner.
                    <br> <span>(required file are .jpg , .png)</span>
                </h3>

                <form action="#upload-file" class="form-upload-file" id="form-upload-file">
                    <div class="file-input">
                        <input type="file" id="file" />
                        <label for="file">choose a file</label>
                    </div>
                    <div class="description-input">
                        <textarea name="description_input" id=""
                            placeholder="type some description about your finished works"></textarea>
                    </div>
                </form>

                <button class="btn-form" type="submit" form="form-upload-file" value="Submit">
                    <h3>Finish Work</h3>
                </button>

            </div>
            <!-- End Of Details Content Wrapper -->

        </div>
</section>



@endsection