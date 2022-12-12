<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GeneralController;


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

// Auth
Route::get('/view/signin_page', [AuthController::class, 'view_signIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/view/signup_page', [AuthController::class, 'view_signUp']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/view/talent-profile', [AuthController::class, 'view_talent_profile']);


// Categories Course
Route::get('/view/course', [CourseController::class, 'view_course'])->name('course');
Route::get('/view/sub-course', [CourseController::class, 'view_sub_course']);
Route::get('/view/topic-course', [CourseController::class, 'view_topic_course']);
Route::get('/view/topic-course-detail', [CourseController::class, 'view_topic_course_detail']);
Route::get('/getcourse', [CourseController::class, 'get_all']);
Route::post('/postcourse', [CourseController::class, 'post_course']);


// General
Route::get('/view/thread', [\App\Http\Controllers\GeneralController::class, 'view_thread']);



// Forum
Route::get('/view/forum-detail-reply', [\App\Http\Controllers\ForumController::class, 'view_forum_detail_reply']);
