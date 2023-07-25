<?php

use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {

    Route::get('/', 'loginPage')->name('login');
    Route::post('/login', 'login')->name('login.store');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth:ins');
    Route::get('/reset-password', 'resetPassword')->name('resetPassword')->middleware('auth:ins');
    Route::post('/resetPassword.store', 'resetPasswordStore')->name('resetPassword.store')->middleware('auth:ins');
});



Route::middleware('auth:customer')->group(function(){
    Route::controller(AuthController::class)->group(function(){

        Route::get('/profile', 'authInfo')->name('authInfo');
        Route::post('/profile-store', 'authUpdate')->name('authInfo.store');
        Route::post('/education-update','educationUpdate')->name('educationUpdate');
        Route::post('/password-update','passwordUpdate')->name('passwordUpdate');
        Route::post('/change-avatar','changeAvatar')->name('changeAvatar');
        Route::post('/social-update','addSocials')->name('addSocials');
        Route::delete('/edu-remove/{student_education}','eduRemove')->name('eduRemove');

    });
 
    Route::get('/home', [HomeController::class,'index'])->name('home');
    // Route::resource('/batches',BatchController::class)->only(['index'])->names('batch');
    // Route::resource('/courses',CourseController::class)->only(['index'])->names('course');
    // Route::resource('/students',StudentController::class)->only(['index','show'])->names('student');
});
