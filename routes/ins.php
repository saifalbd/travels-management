<?php

use App\Http\Controllers\Ins\AuthController;
use App\Http\Controllers\Ins\BatchController;
use App\Http\Controllers\Ins\CourseController;
use App\Http\Controllers\Ins\HomeController;
use App\Http\Controllers\Ins\StudentController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;







Route::controller(AuthController::class)->group(function () {

    Route::get('/', 'loginPage')->name('login.page');
    Route::post('/login', 'login')->name('login.store');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth:ins');
    Route::get('/reset-password', 'resetPassword')->name('resetPassword')->middleware('auth:ins');
    Route::post('/resetPassword.store', 'resetPasswordStore')->name('resetPassword.store')->middleware('auth:ins');
});



Route::middleware('auth:ins')->group(function(){
    Route::get('/profile', [AuthController::class,'authInfo'])->name('authInfo');
    Route::post('/profile-store', [AuthController::class,'authUpdate'])->name('authInfo.store');
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::resource('/batches',BatchController::class)->only(['index'])->names('batch');
    Route::resource('/courses',CourseController::class)->only(['index'])->names('course');
    Route::resource('/students',StudentController::class)->only(['index','show'])->names('student');
});

