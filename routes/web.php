<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.guest
    ');
});

// Auth Guest
Route::get('/view/signin_page', [\App\Http\Controllers\AuthController::class, 'view_signIn']);
Route::get('/view/signup_page', [\App\Http\Controllers\AuthController::class, 'view_signUp']);
Route::get('/view/talent-profile', [\App\Http\Controllers\AuthController::class, 'view_talent_profile']);


// Categories Course
Route::get('/view/course', [\App\Http\Controllers\CourseController::class, 'view_course']);
Route::get('/view/sub-course', [\App\Http\Controllers\CourseController::class, 'view_sub_course']);
Route::get('/view/topic-course', [\App\Http\Controllers\CourseController::class, 'view_topic_course']);
Route::get('/view/topic-course-detail', [\App\Http\Controllers\CourseController::class, 'view_topic_course_detail']);


// General
Route::get('/view/thread', [\App\Http\Controllers\GeneralController::class, 'view_thread']);



// Forum
Route::get('/view/forum-detail-reply', [\App\Http\Controllers\ForumController::class, 'view_forum_detail_reply']);
