<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\AdminController;
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

// ==================================== Navigation Landing Page ======================================================
//--Learner Home
Route::get('/view/learner-home', [AuthController::class, 'view_learner_home'])->name('learner_home');
//--Talent Home
Route::get('/view/talent-home', [AuthController::class, 'view_talent_home'])->name('talent_home');
//-- Admin Home
Route::get('/view/admin-home', [AuthController::class, 'view_admin_home'])->name('admin_home')->middleware('admin');
// Auth Guest 
Route::get('/view/signin_page', [AuthController::class, 'view_signIn']);
// ==================================== Navigation Landing Page ======================================================


// ==================================== Auth ======================================================
Route::get('/view/signin_page', [AuthController::class, 'view_signIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'signin']);

Route::get('/view/signup_page', [AuthController::class, 'view_signUp']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/signout', [AuthController::class, 'signout']);

Route::get('/profile/{id}', [UserController::class, 'view_profile'])->name('profile.page');
Route::put('/user_update', [UserController::class, 'user_update'])->name('user.update');

// Admin only
Route::get('/back', [UserController::class, 'back'])->middleware('admin');
// Admin only

Route::post('/switch_role', [UserController::class, 'switch_role'])->name('switch-role.update');
Route::get('/view/edit/{id}', [UserController::class, 'view_edit']);

Route::get('/view/upload-certification-page/{id}', [UserController::class, 'view_upload_certification_page']);
Route::put('/upload-user-certification',[UserController::class, 'upload_user_certification'])->name('upload.user.certification');

// ==================================== Auth ======================================================

// ==================================== Categories ======================================================
Route::get('/view/course', [CourseController::class, 'view_course']);
Route::get('/view/sub-course', [CourseController::class, 'view_sub_course']);
Route::get('/view/topic-course', [CourseController::class, 'show_course']);
Route::get('/view/topic-course-detail/{id}', [CourseController::class, 'course_detail']);
Route::get('/view/talent-profile', [CourseController::class, 'view_talent_profile']);
// ================== Categories ========================================================================


// Route::get('/view/course', [CourseController::class, 'view_course'])->name('course');
// Route::get('/view/sub-course', [CourseController::class, 'view_sub_course']);
// Route::get('/view/topic-course', [CourseController::class, 'view_topic_course']);
// Route::get('/view/topic-course-detail', [CourseController::class, 'view_topic_course_detail']);
// Route::get('/getcourse', [CourseController::class, 'get_all']);
// Route::post('/postcourse', [CourseController::class, 'post_course']);


// =================================================================================================
// =================================================================================================
// ======================================= LEARNER ==================================================
// =================================================================================================
// =================================================================================================
// ==================================== Thread Learner ======================================================
// --Post a Project
Route::get('/view/thread-learner', [ThreadController::class, 'show_thread'])->name('thread-learner-page');
Route::get('/view/create-thread-page-learner', [ThreadController::class, 'view_create_thread_page_learner'])->name('create-thread-page-learner');
Route::get('/view/my-thread/{id}', [ThreadController::class, 'view_my_thread'])->name('my-thread');
Route::get('/view/appliers', [ThreadController::class, 'view_my_appliers']);
Route::post('/create_thread', [ThreadController::class, 'post_thread']);

Route::get('/delete-thread/{id}', [ThreadController::class, 'delete_thread']);
// --Post a Project

// --Find Freelancers or Talents
Route::get('/view/find-freelancers-talents', [ThreadController::class, 'view_find_freelancers_talents']);
Route::get('/view/thread-talent-detail', [ThreadController::class, 'view_thread_talent_detail']);
// --Find Freelancers or Talents
// ==================================== Thread Learner ======================================================


//==================================== My Progress ====================================
Route::get('/view/my-progress/dealed-projects', [LearnerController::class, 'view_my_dealed_projects']);
Route::get('/view/my-progress/dealed-projects/project-details/', [LearnerController::class, 'view_my_dealed_projects_details']);
Route::get('/view/details-information/', [LearnerController::class, 'view_my_dealed_projects_details_information']);
//==================================== My Progress ====================================

//==================================== My Learning ====================================
Route::get('/view/my-learning', [LearnerController::class, 'view_my_learning'])->name('my_learning');
Route::get('/view/my-learning/course-learned-detail', [LearnerController::class, 'view_course_learned_detail']);
//==================================== My Learning ====================================

//  =========================================== Navigation Learner ===========================================
Route::get('/view/my-progress/find-freelances-talents', [LearnerController::class, 'view_my_progress_find_freelances_talents']);
Route::get('/view/learner/cart', [StoreController::class, 'cart'])->name('view_cart');

Route::get('/addtocart/{id}', [StoreController::class, 'add_to_cart'])->name('addtocart');
Route::post('/checkout', [StoreController::class, 'checkout'])->name('checkout');
//  =========================================== Navigation Learner ===========================================












// =================================================================================================
// =================================================================================================
// =======================================  TALENT==================================================
// =================================================================================================
// =================================================================================================

// =========================================== Thread Talent ====================================
Route::get('/view/thread-talent', [ThreadController::class, 'view_thread_talent']);
Route::get('/view/create-thread-page-talent', [ThreadController::class, 'view_create_thread_page_talent']);
Route::get('/view/thread_apply_jobs', [ThreadController::class, 'view_thread_apply_jobs']);
Route::get('/view/thread-apply-jobs-learner-detail', [ThreadController::class, 'view_thread_apply_jobs_learner_detail']);
// =========================================== Thread Talent ====================================

// Forum
Route::get('/view/forum-detail-reply', [ForumController::class, 'view_forum_detail_reply']);



// =========================================== My Activity ===========================================
Route::get('/view/my-activity-freelance', [TalentController::class, 'view_talent_activity_freelance']);
Route::get('/view/freelance-detail/', [TalentController::class, 'view_freelance_detail']);
Route::get('/view/my-activity-applied-jobs', [TalentController::class, 'view_talent_activity_applied_jobs']);
// =========================================== My Activity ===========================================

// =========================================== My Courses ===========================================
Route::get('/view/create-new-course', [TalentController::class, 'view_create_new_course']);
Route::get('/view/my-courses', [TalentController::class, 'view_my_courses']);
Route::get('/view/my-courses/my-course-detail-chapter', [TalentController::class, 'view_my_course_detail_chapter']);
Route::get('/detail-chapter/id/upload-new-video', [TalentController::class, 'view_my_course_detail_sub_chapter']);
Route::get('/view/video-learning/id/', [TalentController::class, 'view_my_course_detail_video_learning']);


// =========================================== My Courses ===========================================