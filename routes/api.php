<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ApplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Controllers\CourseDetailController;
use App\Http\Controllers\ThreadAttachmentController;
use App\Http\Controllers\ThreadsPostProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/signout', [AuthController::class, 'signout']);

Route::post('/postcourse', [CourseController::class, 'post_course']);
Route::post('/updatecourse', [CourseController::class, 'update_course']);
Route::delete('/deletecourse/{id}', [CourseController::class, 'delete_course']);

Route::post('/postthread', [ThreadController::class, 'post_thread']);
Route::post('/updatethread', [ThreadController::class, 'update_thread']);
Route::delete('/deletethread/{id}', [ThreadController::class, 'delete_thread']);

Route::post('/addcategory', [CategoryController::class, 'add_category']);
Route::post('/updatecategory', [CategoryController::class, 'update_category']);
Route::delete('/deletecategory/{id}', [CategoryController::class, 'delete_category']);

Route::post('/messages', [ChatController::class, 'message']);
Route::post('/addchapter', [CourseDetailController::class, 'add_chapter'])->name('adddchapter');
Route::post('/uploadvideo', [CourseVideoController::class, 'upload_video'])->name('uploadvideo');
Route::get('/addtocart/{id}', [StoreController::class, 'add_to_cart'])->name('addtocart');
Route::post('/chat', [ChatController::class, 'chat'])->name('chat');
Route::post('/apply', [ApplierController::class, 'apply'])->name('apply');
Route::post('/accept', [ApplierController::class, 'accept_applier'])->name('accept');
Route::post('/upload_attachment', [ThreadsPostProjectController::class, 'upload_attachment'])->name('upload_attachment');
Route::post('/finish_thread', [ThreadsPostProjectController::class, 'thread_finished'])->name('thread_finished');
Route::post('/followup', [ThreadAttachmentController::class, 'followup'])->name('followup');

Route::get('/view_course_by_category/{id}', [CourseController::class, 'show_course']);