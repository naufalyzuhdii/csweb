<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ThreadController;


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

// Home Page Landing
//--Guest Home
Route::get('/', function () {
    return view('auth.guest-home
    ');
});

//--Learner Home
Route::get('/view/learner-home', [AuthController::class, 'view_learner_home']);



//--Talent Home
Route::get('/view/talent-home', [AuthController::class, 'view_talent_home']);


// Auth Guest CALVIN KURNIAWAN
Route::get('/view/signin_page', [AuthController::class, 'view_signIn']);
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/view/signup_page', [AuthController::class, 'view_signUp']);
Route::post('/signup', [AuthController::class, 'signup']);


// Categories Course
Route::get('/view/course', [CourseController::class, 'view_course']);
Route::get('/view/sub-course', [CourseController::class, 'view_sub_course']);
Route::get('/view/topic-course', [CourseController::class, 'view_topic_course']);
Route::get('/view/topic-course-detail', [CourseController::class, 'view_topic_course_detail']);
Route::get('/view/talent-profile', [CourseController::class, 'view_talent_profile']);



// Thread
Route::get('/view/thread', [ThreadController::class, 'view_thread']);
Route::get('/view/create-thread-page-learner', [ThreadController::class, 'view_create_thread_page_learner']);

// Forum
Route::get('/view/forum-detail-reply', [ForumController::class, 'view_forum_detail_reply']);


//
