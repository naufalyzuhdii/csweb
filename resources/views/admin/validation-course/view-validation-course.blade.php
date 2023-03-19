@extends('layout.main-template')
@section('linkCSS')
<link href="{{ asset('css/admin/validation-course/view-validation-course.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section('content')
<section class="validation-course">
    <div class="validation-course-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>Admin</span> - Validation Course </h1>
        </div>
        <!-- End Of Title Heading -->

        <!-- <div class="create-new-course-content-wrapper">
            <form action="/add-new-course" method="POST" id="form-create-new-course" enctype="multipart/form-data">
                @csrf
                <div class="course-title-wrapper">
                    <label for="">Course Title</label>
                    <input type="text" name="title">
                </div>
                @error('title')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-category-wrapper">
                    <label for="CourseCategory">Course Category</label>
                    <select name="category" id="CourseCategory" required>
                        @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('category')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-description-wrapper">
                    <label for="">Course Description</label>
                    <textarea name="description" cols="30" rows="10"></textarea>
                </div>
                @error('description')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-price-wrapper">
                    <label for="">Course Price</label>
                    <div class="inputed-price-wrapper">
                        <span>Rp</span>
                        <input type="number" name="price">
                    </div>
                    @error('price')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror
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
                            <input type="file" id="file" name="image" />
                            <label for="file">choose a file</label>
                        </div>
                    </div>
                    @error('image')
                    <div class="danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="button-submit-wrapper">
                    <button type="submit" value="submit" class="submit-btn">
                        Submit
                    </button>
                </div>
            </form>
        </div> -->
        @if (session('message'))
        <div class="success">
            {{ session('message') }}
        </div>
        @endif

        <div class="validation-skills-content-wrapper">
            <table>
                <tr>
                    <th>Course ID</th>
                    <th>User ID</th>
                    <th>Category ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>

                @foreach($course as $course)
                <form action="/validate_course" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <tr class="row-content">
                        <td>
                            <h3>
                                <input type="text" name="course_id" value="{{$course->id}}" id="id_input">
                                @error('course_id')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text" name="user_id" value="{{$course->user_id}}" id="id_input">
                                @error('user_id')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text" name="category_id" value="{{$course->category_id}}" id="id_input">
                                @error('category_id')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text" name="title_update" value="{{$course->title}}" id="title_input">
                                @error('title_update')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text" name="description_update" value="{{$course->description}}"
                                    id="title_input">
                                @error('description_update')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <img src="" alt="">
                                <input type="number" name="price_update" value="{{$course->price}}" id="title_input">
                                @error('price_update')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <div class="profile-picture-content-table">
                                    <div class="picture-wrapper-table">
                                        <div class="picture-table">
                                            <img src="{{ url('course/'.$course->image) }}">
                                        </div>
                                    </div>
                                    <div class="file-input-table">
                                        <input type="file" id="file" name="image_update" />
                                    </div>

                                </div>
                                @error('image_update')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <select name="status_update" id="status_input">
                                    <option selected hidden>{{$course->status}}</option>
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
                                <a href="/delete-course/{{$course->id}}">Delete</a>
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