@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('/css/thread/learner/create-thread-page-learner.css')}}">
@endsection

@section('content')

<section class="create-thread-page-learner">
    <div class="wrapper">
        <div class="thread-page-learner-header">
            <h1>Tell us what you need done</h1>
            <p>Get in touch with skilled freelancers and talents. You can view their profiles, portfolios and ratings.
                Pay
                the freelancer or talent only when
                you are 100% satisfied with their work.
            </p>
        </div>
        @if (session('message'))
        <div class="success">
            {{ session('message') }}
        </div>
        @endif

        <div class="create-thread-page-learner-wrapper">
            <!-- Profile Learner -->
            <div class="profile-learner">
                <div class="profile-learner-wrapper">
                    <div class="profile-learner-image-wrapper">
                        @if(auth()->user()->image == "no picture")
                        <div class="profile-learner-image">
                            <img src="{{ url('storage/profile/account.png') }}" alt="">
                        </div>
                        @else
                        <div class="profile-learner-image">
                            <img src="{{ url('storage/profile/'.auth()->user()->image) }}" />
                        </div>
                        @endif
                    </div>
                    <div class="profile-learner-role-wrapper">
                        <div class="profile-learner-role">
                            <h2>{{Auth::user()->role}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Learner -->
            <!-- Learner Thread Content -->
            <div class="learner-thread-content">
                <div class="learner-thread-name">
                    <h3>{{ old('name', Auth::user()->name) }}</h3>
                </div>
                <form action="/create_thread" enctype="multipart/form-data" method="POST">
                    @csrf

                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class=" learner-thread-project-title">
                        <h3>Project or Task Title</h3>
                        <input type="text" name="project_title" placeholder="e.g Build me a website ...">
                    </div>
                    @error('project_title')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="learner-thread-description">
                        <h3>Description</h3>
                        <textarea name="description" maxlength="500"
                            placeholder="Describe your project here ..."></textarea>
                    </div>
                    @error('description')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="learner-thread-skills-required">
                        <h3>What skills are required?</h3>
                        <input type="text" name="skills_requirement" placeholder="Enter required skills...">
                    </div>
                    @error('skills_requirement')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="learner-offered-wrapper">
                        <div class="offered-duration">
                            <h3>Offered Duration
                                <span> (estimate)</span>
                            </h3>
                            <select name="offered_duration" id="" required>
                                <option selected hidden value="">Choose the duration</option>
                                <option value="less than 1 day">
                                    less than 1 day</option>
                                <option value="1 day">1 day</option>
                                <option value="2 day">2 day</option>
                                <option value="3 day">3 day</option>
                                <option value="4 day">4 day</option>
                                <option value="5 day">5 day</option>
                                <option value="6 day">6 day</option>
                                <option value="7 day">7 day</option>
                                <option value="8 day">8 day</option>
                                <option value="9 day">9 day</option>
                                <option value="10 day">10 day</option>
                                <option value="11 day">11 day</option>
                                <option value="12 day">12 day</option>
                                <option value="13 day">13 day</option>
                                <option value="14 day">14 day</option>
                                <option value="15 day">15 day</option>
                                <option value="16 day">16 day</option>
                                <option value="17 day">17 day</option>
                                <option value="18 day">18 day</option>
                                <option value="19 day">19 day</option>
                                <option value="20 day">20 day</option>
                                <option value="21 day">21 day</option>
                                <option value="22 day">22 day</option>
                                <option value="23 day">23 day</option>
                                <option value="24 day">24 day</option>
                                <option value="25 day">25 day</option>
                                <option value="26 day">26 day</option>
                                <option value="27 day">27 day</option>
                                <option value="28 day">28 day</option>
                                <option value="29 day">29 day</option>
                                <option value="30 day">30 day</option>
                            </select>
                        </div>


                        <div class="offered-price">
                            <h3>Offered Price</h3>
                            <div class="price">
                                <div class="min-price">
                                    <span>Rp.</span>
                                    <input type="text" name="min_price" id="rupiah" maxlength="11"
                                        placeholder="Min Price">
                                </div>
                                <div class="max-price">
                                    <span>Rp.</span>
                                    <input type="text" name="max_price" id="rupiah2" maxlength="11"
                                        placeholder="Max Price">
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('offered_duration')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror
                    @error('min_price')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror
                    @error('max_price')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror


                    <div class="post-thread-btn">
                        <button type="submit">Post Thread</button>
                    </div>
                </form>


                <!-- ADD SKILLS -->
                <!-- <form action="/add-skills-requirement" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="text" name="skills-name">
                    <button type="submit">add</button>
                </form> -->
                <!-- ADD SKILLS -->

            </div>
            <!-- Learner Thread Content -->
        </div>
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


var rupiah2 = document.getElementById("rupiah2");
rupiah2.addEventListener("keyup", function(e) {

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