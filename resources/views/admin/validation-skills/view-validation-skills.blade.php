@extends('layout.main-template')
@section('linkCSS')
<link href="{{ asset('css/admin/validation-skills/view-validation-skills.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section('content')
<section class="validation-skills">
    <div class="validation-skills-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>Admin</span> - Validation Skills </h1>
        </div>
        <!-- End Of Title Heading -->

        <form action="/add-skills" method="post" enctype="multipart/form-data" class="form-add-skills">
            @csrf
            <div class="wrapper">
                <label for="">Add New Skills</label>
                <input type="text" name="skills_name">
            </div>
            <div class="btn">
                <button type="submit">Add</button>
            </div>
        </form>
        @error('skills_name')
        <div class="danger">
            {{$message}}
        </div>
        @enderror

        @if (session('message'))
        <div class="success">
            {{ session('message') }}
        </div>
        @endif

        <div class="validation-skills-content-wrapper">
            <table>
                <tr>
                    <th>Skills ID</th>
                    <th>Skills Name</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>

                @foreach($skills as $skills)
                <form action="/update_skills" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <tr class="row-content">
                        <td>
                            <h3>
                                <input type="text" name="skills_id" value="{{$skills->id}}" id="skills_id_input">
                            </h3>
                        </td>
                        <td>
                            <h3><input type="text" name="skills_name" value="{{$skills->name}}" id="skills_name_input">
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <select name="skills_status" id="skills_status_input">
                                    <option selected hidden>{{$skills->status}}</option>
                                    <option value="invalid">invalid</option>
                                    <option value="valid">valid</option>
                                </select>
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <button type="submit">Update</button>
                            </h3>
                            <h3>
                                <a href="/delete-skills/{{$skills->id}}">Delete</a>
                            </h3>
                        </td>
                    </tr>
                </form>
                @endforeach
            </table>
        </div>
    </div>

</section>

@endsection