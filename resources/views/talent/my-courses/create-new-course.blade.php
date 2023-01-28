@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/create-new-course.css')}}">
@endsection

@section('content')
<section class="create-new-course">
    <div class="create-new-course-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Courses</span> - Create New Course </h1>
            <p>Here you can create and upload your new course.
            </p>
        </div>
        <!-- End Of Title Heading -->

        <!-- Content Wrapper -->
        <div class="create-new-course-content-wrapper">
            <form action="/create-new-course" method="get" id="form-create-new-course">
                <div class="course-title-wrapper">
                    <label for="">Course Title</label>
                    <input type="text" name="course-title">
                </div>
                <div class="course-description-wrapper">
                    <label for="">Course Description</label>
                    <textarea name="course-description" cols="30" rows="10"></textarea>
                </div>
                <div class="course-price-wrapper">
                    <label for="">Course Price</label>
                    <div class="inputed-price-wrapper">
                        <span>Rp</span>
                        <input type="text" name="course-price" id="rupiah" maxlength="11">
                    </div>
                </div>
                <div class="course-image-wrapper">
                    <label for="">Course Image</label>
                    <div class="profile-picture-content">
                        <div class="picture-wrapper">
                            <div class="picture">
                                <img src="">
                            </div>
                        </div>
                        <div class="file-input">
                            <input type="file" id="file" />
                            <label for="file">choose a file</label>
                        </div>
                    </div>
                </div>
                <div class="button-submit-wrapper">
                    <button type="submit" value="submit" class="submit-btn">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <!-- Content Wrapper -->
    </div>
</section>


<script>
var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {
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
</script>

@endsection