@extends('layout.main-template')

@section('linkCSS')
<link rel="stylesheet" href="{{asset('/css/thread/learner/edit-thread.css')}}">
@endsection

@section('content')

<section class="create-thread-page-learner">
    <div class="wrapper">
        <div class="thread-page-learner-header">
            <h1> Thread Edit Page</h1>
            <p>Edit your own thread if there's any change needed.
                <br>
                Here, you can update your project or task's fix price after dealed with talent.
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
                            <img src="{{ url('profile/account.png') }}" alt="">
                        </div>
                        @else
                        <div class="profile-learner-image">
                            <img src="{{ url('profile/'.auth()->user()->image) }}" />
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
                <form action="/update-thread" enctype="multipart/form-data" method="POST" id="thread-user-update">
                    @method('put')
                    @csrf
                    <input type="hidden" name="thread_id" value="{{$thread->id}}">
                    <div class=" learner-thread-project-title">
                        <h3>Project or Task Title</h3>
                        <input type="text" name="project_title" placeholder="e.g Build me a website ..."
                            value="{{($thread->project_title)}}">
                    </div>
                    @error('project_title')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="learner-thread-description">
                        <h3>Description</h3>
                        <textarea name="description" maxlength="500"
                            placeholder="Describe your project here ...">{{($thread->description)}}</textarea>
                    </div>
                    @error('description')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="learner-thread-skills-required">
                        <h3>What skills are required?</h3>
                        <select name="skills_requirement">
                            <option value="none" selected disabled hidden>{{$thread->skills->name}}</option>
                            @foreach($skills as $skills)
                            @if($skills->status == 'valid')
                            <option value="{{$skills->id}}">{{ $skills->name }}</option>
                            @endif
                            @endforeach
                        </select>

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
                                <option selected disabled hidden>{{$thread->offered_duration}}
                                </option>
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
                                <?php
                                    $nominal_depan_min = number_format($thread->min_price, 0, ",", ".");
                                    $nominal_depan_max = number_format($thread->max_price, 0, ",", ".");
                                    $nominal_depan_fix = number_format($thread->fix_price, 0, ",", ".");
                                ?>
                                <div class="min-price">
                                    <h3>Min Price</h3>
                                    <div class="price-wrapper">
                                        <span>Rp.</span>
                                        <input type="number" name="min_price" id="rupiah" placeholder="Min Price"
                                            value="{{$thread->min_price}}">
                                    </div>
                                </div>
                                <div class="max-price">
                                    <h3>Max Price</h3>
                                    <div class="price-wrapper">
                                        <span>Rp.</span>
                                        <input type="number" name="max_price" id="rupiah2" placeholder="Max Price"
                                            value="{{$thread->max_price}}">
                                    </div>

                                </div>
                                <div class="fix-price">
                                    <h3>Fix Price</h3>
                                    <!-- <div class="price-wrapper">
                                        <span>Rp.</span>
                                        <input type="number" name="fix_price" id="rupiah3" placeholder="Fix Price"
                                            value="{{$thread->fix_price}}">
                                    </div> -->
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

                    @error('fix_price')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="post-thread-btn">
                        <button type="submit">Update Thread</button>
                    </div>
                </form>
                <!-- <div class="add-skills-wrapper">
                    <div class="add-skills-form" id="add-skills-form">
                        <form action="/add-new-skills" method="get" enctype="multipart/form-data">
                            @csrf
                            <div class="input-new-skills-wrapper">
                                <label for="skillsName">Skills Name</label>
                                <input type="text" name="new_skills" id="skillsName">
                            </div>
                            <div class="btn">
                                <button type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div> -->



            </div>
            <!-- Learner Thread Content -->
        </div>
    </div>
</section>

<script>
// var rupiah = document.getElementById("rupiah");
// rupiah.addEventListener("keyup", function(e) {

//     rupiah.value = formatRupiah(this.value, "Rp. ");
// });


// function formatRupiah(angka, prefix) {
//     var number_string = angka.replace(/[^,\d]/g, "").toString(),
//         split = number_string.split(","),
//         sisa = split[0].length % 3,
//         rupiah = split[0].substr(0, sisa),
//         ribuan = split[0].substr(sisa).match(/\d{3}/gi);

//     // tambahkan titik jika yang di input sudah menjadi angka ribuan
//     if (ribuan) {
//         separator = sisa ? "." : "";
//         rupiah += separator + ribuan.join(".");
//     }

//     rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
//     return prefix == undefined ? rupiah : rupiah ? rupiah : "";
// }


// var rupiah2 = document.getElementById("rupiah2");
// rupiah2.addEventListener("keyup", function(e) {

//     rupiah2.value = formatrupiah2(this.value, "Rp. ");
// });


// function formatrupiah2(angka, prefix) {
//     var number_string = angka.replace(/[^,\d]/g, "").toString(),
//         split = number_string.split(","),
//         sisa = split[0].length % 3,
//         rupiah2 = split[0].substr(0, sisa),
//         ribuan = split[0].substr(sisa).match(/\d{3}/gi);

//     // tambahkan titik jika yang di input sudah menjadi angka ribuan
//     if (ribuan) {
//         separator = sisa ? "." : "";
//         rupiah2 += separator + ribuan.join(".");
//     }

//     rupiah2 = split[1] != undefined ? rupiah2 + "," + split[1] : rupiah2;
//     return prefix == undefined ? rupiah2 : rupiah2 ? rupiah2 : "";
// }


// var rupiah3 = document.getElementById("rupiah3");
// rupiah3.addEventListener("keyup", function(e) {

//     rupiah3.value = formatrupiah3(this.value, "Rp. ");
// });


// function formatrupiah3(angka, prefix) {
//     var number_string = angka.replace(/[^,\d]/g, "").toString(),
//         split = number_string.split(","),
//         sisa = split[0].length % 3,
//         rupiah3 = split[0].substr(0, sisa),
//         ribuan = split[0].substr(sisa).match(/\d{3}/gi);

//     // tambahkan titik jika yang di input sudah menjadi angka ribuan
//     if (ribuan) {
//         separator = sisa ? "." : "";
//         rupiah3 += separator + ribuan.join(".");
//     }

//     rupiah3 = split[1] != undefined ? rupiah3 + "," + split[1] : rupiah3;
//     return prefix == undefined ? rupiah3 : rupiah3 ? rupiah3 : "";
// }
</script>

@endsection