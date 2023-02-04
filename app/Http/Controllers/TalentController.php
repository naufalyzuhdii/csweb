<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TalentController extends Controller
{
    public function view_talent_activity_freelance()
    {
        return view('talent.my-activity.talent-activity-freelance');
    }
    public function view_freelance_detail()
    {
        return view('talent.my-activity.talent-activity-freelance-detail');
    }
    public function view_talent_activity_applied_jobs()
    {
        return view('talent.my-activity.talent-activity-applied-jobs');
    }

    

    public function view_create_new_course()
    {
        return view('talent.my-courses.create-new-course');
    }
    public function view_my_courses()
    {
        $my_courses['my_courses'] = Course::where('user_id', Auth::id())->orderBy('title', 'asc')->get();
        return view('talent.my-courses.my-courses')->with('my_courses', $my_courses);
    }
    public function view_my_course_detail_chapter()
    {
        return view('talent.my-courses.my-course-detail-chapter');
    }
    public function view_my_course_detail_sub_chapter()
    {
        return view('talent.my-courses.my-course-detail-sub-chapter');
    }
    public function view_my_course_detail_video_learning()
    {
        return view('talent.my-courses.my-course-detail-video-learning');
    }
}