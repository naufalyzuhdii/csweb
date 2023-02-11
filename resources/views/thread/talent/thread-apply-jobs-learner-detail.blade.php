@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/talent/thread-apply-jobs-learner-detail.css')}}">
@endsection

@section ('content')
<section class="thread-apply-jobs-learner-detail">
    <div class="section-wrapper">
        <div class="first-section">
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
                <div class="learner-thread-bottom-content">
                    <div class="talents-apply">
                        <div class="talents-apply-wrapper">
                            <h4><span>2 </span>talent(s) has apply this offer</h4>
                        </div>
                    </div>
                </div>
                @if ($thread->status == 0)
                    
                @else
                    <div class="chat-btn">
                        <form action="/add_chatroom" method="POST">
                        @csrf
                            <button type="submit">
                                <a>Chat Talent</a>
                            </button>
                        </form>
                    </div>
                @endif
            </div>
            <!-- LEARNER THREAD CONTENT -->
        </div>

        <div class="second-section">
            <div class="job-title-section">
                <h3>Job Title</h3>
                <h4>{{$thread->project_title}}</h4>
            </div>
            <!-- <div class="job-category-section">
                <div class="category-section">
                    <h3>Category</h3>
                    <h4>Technology</h4>
                </div>
                <div class="subcategory-section">
                    <h3>Sub Category</h3>
                    <h4>Website Development</h4>
                </div>
                <div class="topic-section">
                    <h3>Topic</h3>
                    <h4>Laravel</h4>
                </div>
            </div> -->
            <div class="job-description-section">
                <h3>Job Description</h3>
                <h4>{{$thread->description}}</h4>
            </div>
            <div class="job-duration-section">
                <div class="offer-duration-section">
                    <h3>Offered Duration</h3>
                    <h4>{{$thread->offered_duration}}</h4>
                </div>
                <div class="offer-price-section">
                    <h3>Offered Price Range</h3>
                    <h4>Rp. {{$nominal_depan_min}} - Rp. {{$nominal_depan_max}}</h4>
                </div>
                <div class="offer-fix-price">
                    <h3>Offered Fix Price</h3>
                    <h4>Rp. {{$nominal_depan_fix}}</h4>
                </div>
            </div>
        </div>


        <div class="third-section">
            <div class="talent-income-details">
                <h3 class="income-details-heading">
                    Income Details
                </h3>
                <h3 class="commision-warning">
                    Commision 10% will be deducted from your dealed price
                </h3>
                <div class="income-details-section">
                    <div class="current-price-details">
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3> Offered Fix Price</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3>Rp. {{$nominal_depan_fix}}</h3>
                            </div>
                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Commision 10%</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3>Rp. {{$commision_depan}}</h3>
                            </div>
                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Net income received</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3>Rp. {{$net_income_depan}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apply-btn">
                <!-- <a href="/apply-this-job/{{$thread->id}}">Apply This Job</a> -->
                <a href="">Apply This Job</a>
            </div>

            <!-- <button form="negotiation-form" type="submit">Submit</button> -->
        </div>
</section>


<script>
var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {

    rupiah.value = formatrupiah(this.value, "Rp. ");
});


function formatrupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? rupiah : "";
}
</script>


@endsection