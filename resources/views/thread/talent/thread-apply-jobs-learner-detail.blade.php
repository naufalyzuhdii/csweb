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
            <!-- PROFILE LEARNER -->

            <!-- LEARNER THREAD CONTENT -->
            <div class="learner-thread-content">
                <div class="learner-thread-name">
                    <h3>Jason</h3>
                </div>
                <div class="learner-thread-project-required-skills">
                    <div class="title_wrapper">
                        <h3>Required Skills </h3>
                        <h3>:</h3>
                    </div>
                    <div class="content">
                        <ul>
                            <li>Laravel</li>
                            <li>CSS</li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="learner-thread-project-title">
                    <div class="title_wrapper">
                        <h3>Project Title</h3>
                        <h3>:</h3>
                    </div>
                    <div class="content">
                        <p></p>
                    </div>
                </div>
                <div class="learner-thread-project-description">
                    <div class="title_wrapper">
                        <h3>Project Description </h3>
                        <h3>:</h3>
                    </div>
                    <div class="content">
                        <p></p>
                    </div>
                </div>

                <div class="learner-thread-offer">
                    <div class="title_wrapper">
                        <h3>Offer </h3>
                    </div>
                    <div class="learner-thread-offer-detail">
                        <h3>Duration : </h3>
                        <h3>Price range : <span>Rp </span> - <span>Rp
                            </span></h3>
                    </div>
                </div> -->
                <div class="learner-thread-bottom-content">
                    <div class="talents-apply">
                        <div class="talents-apply-wrapper">
                            <h4><span>2 </span>talent(s) has apply this offer</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LEARNER THREAD CONTENT -->
        </div>

        <div class="second-section">
            <div class="job-title-section">
                <h3>Job Title</h3>
                <h4>Mengajar materi tentang pembuatan Website Development menggunakan Laravel</h4>
            </div>
            <div class="job-category-section">
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
            </div>
            <div class="job-description-section">
                <h3>Description</h3>
                <h4>Mengajar secara jelas mengenai mateir ini dari awal hingga akhir</h4>
            </div>
            <div class="job-duration-section">
                <div class="offer-duration-section">
                    <h3>Offered Duration</h3>
                    <h4>1-2 hours</h4>
                </div>
                <div class="offer-price-section">
                    <h3>Offered Price</h3>
                    <h4>Rp. 500.000</h4>
                </div>
                <div class="empty">
                    <h3>Offered Price</h3>
                    <h4>Rp. 500.000</h4>
                </div>
            </div>
        </div>


        <div class="third-section">
            <!-- <h3 class="negotiation-heading">
                Create negotiation for this job offer
            </h3>
            <div class="talent-offered-section">
                <form action="" id="negotiation-form">
                    <div class="offered-price-input-section">
                        <h3>Your Offered Price</h3>
                        <div class="input-section">
                            <span>Rp.</span>
                            <input type="text" id="rupiah" name="talent_offered_price">
                        </div>
                    </div>
                    <div class="offered-description-input-section">
                        <h3>Offered Description</h3>
                        <textarea name="talent-offered-description" maxlength="450"></textarea>
                    </div>
                    <div class="document-support-input-section">
                        <h3>Supported Document (optional)</h3>
                        <div class="file-input">
                            <input type="file" id="file">
                            <label for="file">choose a file</label>
                        </div>
                    </div>
                </form>
            </div>
            <hr> -->
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
                                <h3>Learner's Offered Price</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3><span>Rp.</span> 500.000</h3>
                            </div>
                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Commision 10%</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3><span>Rp.</span> 50.000</h3>
                            </div>
                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Net income received</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3><span>Rp.</span> 450.000</h3>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="offered-price-details">
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Talent's Offered Price</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3><span>Rp.</span> 600.000</h3>
                            </div>
                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Commision 10%</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3><span>Rp.</span> 60.000</h3>
                            </div>
                        </div>
                        <div class="row_detail">
                            <div class="label_tag">
                                <h3>Net income received</h3>
                                <span>:</span>
                            </div>
                            <div class="price_tag">
                                <h3><span>Rp.</span> 540.000</h3>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="apply-btn">
                <a href="/submit">Apply This Job</a>
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