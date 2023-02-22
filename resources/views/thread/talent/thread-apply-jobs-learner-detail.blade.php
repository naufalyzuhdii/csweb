@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/thread/talent/thread-apply-jobs-learner-detail.css')}}">
@endsection

@section ('content')
<section class="thread-apply-jobs-learner-detail">

    <div class="section-wrapper">
        @if (session('message'))
        <div class="success">
            {{ session('message') }}
        </div>
        @endif
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
                            <li>{{$thread->skills->name}}</li>
                        </ul>
                    </div>
                </div>
                <?php
                    $count = DB::table('appliers')->where('threads_post_projects_id',$thread->id)->get()->count();
                ?>
                <div class="learner-thread-bottom-content">
                    <div class="talents-apply">
                        <div class="talents-apply-wrapper">
                            <h4><span style="margin-right:.25rem;">{{$count}} </span>talent(s) has apply this offer</h4>
                        </div>
                    </div>
                </div>
                @if ($thread->status == 0)
                @else
                <div class="chat-btn">
                    <form action="/add_chatroom" method="POST">
                        @csrf
                        <button type="submit">
                            Chat Learner
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
                <div class="offer-fix-price" style="visibility: hidden; opacity:0">
                    <h3>Offered Fix Price</h3>
                    <h4>Rp. {{$nominal_depan_fix}}</h4>
                </div>
            </div>
        </div>



        <div class="third-section">
            <form action="/applier-price" enctype="multipart/form-data" method="POST" id="apply_form">
                @csrf
                <div class="offered-price">
                    <h3>Applier Price</h3>
                    <div class="price">
                        <div class="applier-price">
                            <span>Rp.</span>
                            <input type="number" name="apply_price" maxlength="11" placeholder="Applier Price"
                                id="apply_price" onkeyup="calc(this.value);" min="{{$thread->min_price}}"
                                max="{{$thread->max_price}}">
                        </div>
                    </div>
                </div>
                @error('apply_price')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="offered-description">
                    <textarea name="description" id=""
                        placeholder="Type your reason why learner must choose you to be their partner. You can provide yours project's  or work's links."></textarea>
                </div>
                @error('description')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <input type="text" value="{{$thread->status}}" name="status" hidden>
                <input type="text" value="{{$thread->id}}" name="threads_post_projects_id" hidden>
                <input type="text" value="{{$thread->user->id}}" name="user_id" hidden>
            </form>

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
                                <h3> Offered Price</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <span>Rp. </span>
                                <input type="text" disabled id="applier_price">
                            </div>
                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Commision 10%</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <div class="price_tag">
                                    <span>Rp. </span>
                                    <input type="text" disabled id="commision_price">
                                </div>
                            </div>

                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Net income received</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <span>Rp. </span>
                                <input type="text" disabled id="net_income">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="apply-btn" form="apply_form">Apply This Job</button>

                <!-- <button form="negotiation-form" type="submit">Submit</button> -->
            </div>

</section>


<script>
function calc(value) {
    var inputed_price, commision_p, net_i;
    inputed_price = 1 * value;
    commision_p = 0.1 * value;
    net_i = value - commision_p;




    var number_string = inputed_price.toString(),
        sisa = number_string.length % 3,
        inputed_price = number_string.substr(0, sisa),
        ribuan = number_string.substr(sisa).match(/\d{3}/g);

    if (ribuan) {
        separator = sisa ? '.' : '';
        inputed_price += separator + ribuan.join('.');
    }
    var number_string = commision_p.toString(),
        sisa = number_string.length % 3,
        commision_p = number_string.substr(0, sisa),
        ribuan = number_string.substr(sisa).match(/\d{3}/g);

    if (ribuan) {
        separator = sisa ? '.' : '';
        commision_p += separator + ribuan.join('.');
    }
    var number_string = net_i.toString(),
        sisa = number_string.length % 3,
        net_i = number_string.substr(0, sisa),
        ribuan = number_string.substr(sisa).match(/\d{3}/g);

    if (ribuan) {
        separator = sisa ? '.' : '';
        net_i += separator + ribuan.join('.');
    }




    document.getElementById('applier_price').value = inputed_price;
    document.getElementById('commision_price').value = commision_p;
    document.getElementById('net_income').value = net_i;

}

// function mult(value) {
//     var x, y;
//     x = 2 * value;
//     y = 3 * value;
//     document.getElementById('out2x').innerText = x;
//     document.getElementById('out3x').value = y;

// }
</script>


@endsection