@extends('layout.main-template')
@section('linkCSS')
<link rel="stylesheet" href="{{asset('css/talent/my-courses/my-course-edit.css')}}">
@endsection

@section('content')
<section class="my-course-edit">
    <div class="my-course-edit-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>My Courses</span> - Edit Course </h1>
            <p>Here you can edit your own course.
            </p>
        </div>
        <!-- End Of Title Heading -->
        @if(session('message'))
        <div class="success">
            {{session('message')}}
        </div>
        @endif
        <div class="my-course-edit-content-wrapper">
            <form action="/update_course" method="POST" id="form-edit-course" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" value="{{$course->id}}" hidden>
                <div class="course-title-wrapper">
                    <label for="CourseTitle">Course Title</label>
                    <input type="text" name="title" id="CourseTitle" value="{{$course->title}}">
                </div>
                @error('title')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-category-wrapper">
                    <label for="CourseCategory">Course Category</label>
                    <select name="category" id="CourseCategory" required>
                        <option selected hidden value="{{$course->category->id}}">{{$course->category->name}}</option>
                        @foreach($category as $ct)
                        <option value="{{$ct->id}}">{{$ct->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('category')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-description-wrapper">
                    <label for="CourseDescription">Course Description</label>
                    <textarea name="description" cols="30" rows="10" id="CourseDescription">
                        {{$course->description}}</textarea>
                </div>
                @error('description')
                <div class=" danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-price-wrapper">
                    <label for=CoursePrice">Course Price</label>
                    <div class="inputed-price-wrapper">
                        <span>Rp</span>
                        <input type="number" name="price" id="CoursePrice" value="{{$course->price}}">
                    </div>
                </div>
                @error('price')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="course-image-wrapper">
                    <label for="">Course Image</label>
                    <div class="profile-picture-content">
                        <div class="picture-wrapper">
                            <div class="picture">
                                <img src="{{asset('course/'.$course->image)}}">
                            </div>
                        </div>
                        <div class="file-input">
                            <input type="file" id="file" name="image" />
                            <label for="file">choose a file</label>
                        </div>
                    </div>
                </div>
                @error('image')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="button-submit-wrapper">
                    <button type="submit" value="submit" class="submit-btn">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection