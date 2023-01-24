<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}