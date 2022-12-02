<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function view_forum_detail_reply()

    {
        return view('forum.forum-detail-reply');
    }
}
