<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function view_course()
    {
        return view('categories.course');
    }
    public function view_sub_course()
    {
        return view('categories.sub-course');
    }
    public function view_topic_course()
    {
        return view('categories.topic-course');
    }

    public function view_topic_course_detail()
    {
        return view('categories.topic-course-detail');
    }

    public function view_talent_profile()

    {
        return view('course.talent-profile-course');
    }
}
