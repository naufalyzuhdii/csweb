<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ThreadsPostProjectController;
use App\Http\Controllers\ThreadsFreelancersTalentsController;
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
})->middleware('guest');

// ==================================== Navigation Landing Page ======================================================
//--Learner Home
Route::get('/view/learner-home', [AuthController::class, 'view_learner_home'])->name('learner_home')->middleware('learner');
//--Talent Home
Route::get('/view/talent-home', [AuthController::class, 'view_talent_home'])->name('talent_home')->middleware('talent');
//-- Admin Home
Route::get('/view/admin-home', [AuthController::class, 'view_admin_home'])->name('admin_home')->middleware('admin');
// Auth Guest 
Route::get('/view/signin_page', [AuthController::class, 'view_signIn'])->middleware('guest');
// ==================================== Navigation Landing Page ======================================================


// ==================================== Auth ======================================================
Route::get('/view/signin_page', [AuthController::class, 'view_signIn'])->name('signin')->middleware('guest');
Route::post('/signin', [AuthController::class, 'signin'])->middleware('guest');
Route::get('/view/signup_page', [AuthController::class, 'view_signUp'])->middleware('guest');
Route::post('/signup', [AuthController::class, 'signup'])->middleware('guest');

Route::get('/profile/{id}', [UserController::class, 'view_profile'])->name('profile.page')->middleware('auth');
Route::put('/user_update', [UserController::class, 'user_update'])->name('user.update')->middleware('auth');
Route::get('/signout', [AuthController::class, 'signout'])->middleware('auth');


// Admin only
Route::get('/back', [UserController::class, 'back'])->middleware('admin')->middleware('admin');
Route::get('/view/certification-document/{$id}', [AdminController::class, 'view_certification_document'])->middleware('admin');
Route::put('/update-certification-status', [AdminController::class, 'update_certification_status'])->name('update.certification-status')->middleware('admin');
Route::get('/view/edit/{id}', [AdminController::class, 'view_edit'])->middleware('admin');

// Admin only
Route::post('/switch_role', [UserController::class, 'switch_role'])->name('switch-role.update')->middleware('both');

Route::get('/view/upload-certification-page/{id}', [UserController::class, 'view_upload_certification_page'])->middleware('learner');
Route::put('/upload-user-certification',[UserController::class, 'upload_user_certification'])->name('upload.user.certification')->middleware('learner');

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


// =================================================================================================
// =================================================================================================
// ======================================= LEARNER ==================================================
// =================================================================================================
// =================================================================================================
// ==================================== Thread Learner ======================================================
// --Post a Project
Route::get('/view/threads-post-project/learner', [ThreadsPostProjectController::class, 'view_ThreadsPostProject_learner'])->name('ThreadPostProject.Learner')->middleware('learner');
Route::get('/view/threads-post-project/learner/create-thread', [ThreadsPostProjectController::class, 'view_ThreadsPostProject_learner_CreateThread'])->name('create-thread-page-learner')->middleware('learner');
Route::get('/view/threads-post-project/learner/mythread/{id}', [ThreadsPostProjectController::class, 'view_ThreadsPostProject_learner_MyThread'])->name('my-thread')->middleware('learner');
Route::get('/view/appliers', [ThreadsPostProjectController::class, 'view_my_appliers'])->middleware('learner');
Route::post('/create_thread', [ThreadsPostProjectController::class, 'post_thread'])->middleware('learner');


Route::get('/edit-thread/{id}', [ThreadsPostProjectController::class, 'edit_thread'])->middleware('learner');
Route::put('/update-thread', [ThreadsPostProjectController::class, 'update_thread'])->middleware('learner');
Route::get('/delete-thread/{id}', [ThreadsPostProjectController::class, 'delete_thread'])->middleware('learner');
Route::get('/add-new-skills', [ThreadsPostProjectController::class, 'add_new_skills'])->middleware('learner');
// --Post a Project

// --Find Freelancers or Talents
Route::get('/view/threads-freelancers-talents/learner', [ThreadsPostProjectController::class, 'view_find_freelancers_talents'])->middleware('learner');
Route::get('/view/thread-talent-detail', [ThreadsPostProjectController::class, 'view_thread_talent_detail'])->middleware('learner');
// --Find Freelancers or Talents
// ==================================== Thread Learner ======================================================


//==================================== My Progress ====================================
Route::get('/view/my-progress/dealed-projects', [LearnerController::class, 'view_my_dealed_projects'])->middleware('learner');
Route::get('/view/my-progress/dealed-projects/project-details/', [LearnerController::class, 'view_my_dealed_projects_details'])->middleware('learner');
Route::get('/view/details-information/', [LearnerController::class, 'view_my_dealed_projects_details_information'])->middleware('learner');
//==================================== My Progress ====================================

//==================================== My Learning ====================================
Route::get('/view/my-learning', [LearnerController::class, 'view_my_learning'])->name('my_learning')->middleware('learner');
Route::get('/view/my-learning/course-learned-detail', [LearnerController::class, 'view_course_learned_detail'])->middleware('learner');
//==================================== My Learning ====================================

//  =========================================== Navigation Learner ===========================================
Route::get('/view/my-progress/find-freelances-talents', [LearnerController::class, 'view_my_progress_find_freelances_talents'])->middleware('learner');
Route::get('/view/learner/cart', [StoreController::class, 'cart'])->name('view_cart')->middleware('learner');

Route::get('/addtocart/{id}', [StoreController::class, 'add_to_cart'])->name('addtocart')->middleware('learner');
Route::get('/removecart/{id}', [StoreController::class, 'remove_cart'])->name('removecart')->middleware('learner');
Route::get('/checkout', [StoreController::class, 'checkout'])->name('checkout')->middleware('learner');
//  =========================================== Navigation Learner ===========================================












// =================================================================================================
// =================================================================================================
// =======================================  TALENT==================================================
// =================================================================================================
// =================================================================================================

// =========================================== Thread Talent ====================================
Route::get('/view/threads-apply-job/talent', [ThreadsFreelancersTalentsController::class, 'view_thread_apply_jobs'])->middleware('talent');
Route::get('/view/thread-apply-jobs-learner-detail/{id}', [ThreadsFreelancersTalentsController::class, 'view_thread_apply_jobs_learner_detail'])->middleware('talent');
Route::get('/view/threads-post-freelancers-shop/talent', [ThreadsFreelancersTalentsController::class, 'view_create_thread_page_talent'])->middleware('talent');
// =========================================== Thread Talent ====================================

// Forum
Route::get('/view/forum-detail-reply', [ForumController::class, 'view_forum_detail_reply']);



// =========================================== My Activity ===========================================
Route::get('/view/my-activity-freelance', [TalentController::class, 'view_talent_activity_freelance'])->middleware('talent');
Route::get('/view/freelance-detail/', [TalentController::class, 'view_freelance_detail'])->middleware('talent');
Route::get('/view/my-activity-applied-jobs', [TalentController::class, 'view_talent_activity_applied_jobs'])->middleware('talent');
// =========================================== My Activity ===========================================

// =========================================== My Courses ===========================================
Route::get('/view/create-new-course', [TalentController::class, 'view_create_new_course'])->middleware('talent');
Route::post('/postcourse', [CourseController::class, 'post_course']);
Route::get('/view/my-courses', [CourseController::class, 'my_courses'])->middleware('auth')->name('mycourse');
Route::get('/view/my-courses/my-course-detail-chapter', [TalentController::class, 'view_my_course_detail_chapter'])->middleware('talent');
Route::get('/detail-chapter/id/upload-new-video', [TalentController::class, 'view_my_course_detail_sub_chapter'])->middleware('talent');
Route::get('/view/video-learning/id/', [TalentController::class, 'view_my_course_detail_video_learning'])->middleware('talent');


// =========================================== My Courses ===========================================