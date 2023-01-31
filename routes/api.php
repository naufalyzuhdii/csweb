<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseDetailController;

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
Route::post('/uploadvideo', [CourseDetailController::class, 'upload_video'])->name('uploadvideo');