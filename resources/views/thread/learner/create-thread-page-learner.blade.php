@extends('navigation.learner-template')
<link rel="stylesheet" href="{{asset('/css/thread/learner/create-thread-page-learner.css')}}">



@section('content')

<section class="create-thread-page-learner">
    <div class="thread-page-learner-header">
        <h1>Tell us what you need done</h1>
        <p>Get in touch with skilled freelancers and talents. You can view their profiles, portfolios and ratings. Pay
            the freelancer or talent only when
            you are 100% satisfied with their work.
        </p>
    </div>
    <div class="create-thread-page-learner-wrapper">
        <div class="profile-learner">
            <div class="profile-learner-wrapper">
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
        </div>

        <div class="learner-thread-content">
            <div class="learner-thread-name">
                <h2>Jason</h2>
            </div>
            <form action="#">
                <div class="learner-thread-project-title">
                    <h3>Project Title</h3>
                    <input type="text" name="project-title" placeholder="e.g Build me a website ...">
                </div>

                <div class="learner-thread-description">
                    <h3>Description</h3>
                    <textarea name="learner-thread-description" maxlength="500"
                        placeholder="Describe your project here ..."></textarea>
                </div>

                <div class="learner-thread-skills-required">
                    <h3>What skills are required?</h3>
                    <input type="text" name="skills" placeholder="Enter required skills...">
                </div>

                <div class="learner-offered-things">
                    <div class="offered-duration">
                        <h3>Offered Duration</h3>
                        <input type="text" name="offered-duration">
                    </div>
                    <div class="offered-price">
                        <h3>Offered Price</h3>
                        <div class="price">
                            <div class="min-price">
                                <span>Rp.</span>
                                <input type="text" name="min-price" id="rupiah" maxlength="11" placeholder="Min Price">
                            </div>
                            <div class="max-price">
                                <span>Rp.</span>
                                <input type="text" name="max-price" id="rupiah2" maxlength="11" placeholder="Max Price">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="post-thread-btn">
                    <button type="submit">Post Thread</button>
                </div>
            </form>
        </div>

    </div>
</section>

<script>
    var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function (e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, "Rp. ");
});


function formatRupiah(angka, prefix) {
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


var rupiah2 = document.getElementById("rupiah2");
rupiah2.addEventListener("keyup", function (e) {

    rupiah2.value = formatrupiah2(this.value, "Rp. ");
});


function formatrupiah2(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah2 = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? "." : "";
        rupiah2 += separator + ribuan.join(".");
    }

    rupiah2 = split[1] != undefined ? rupiah2 + "," + split[1] : rupiah2;
    return prefix == undefined ? rupiah2 : rupiah2 ? rupiah2 : "";
}
</script>

@endsection
