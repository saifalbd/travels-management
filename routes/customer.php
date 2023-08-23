<?php

use App\Http\Controllers\Admin\CustomerPaymentController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {

    Route::get('/', 'loginPage')->name('login');
    Route::get('/register', 'registerPage')->name('register');
    Route::post('/register', 'register')->name('register.store');
    Route::post('/login', 'login')->name('login.store');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth:customer');
    Route::get('/reset-password', 'resetPassword')->name('resetPassword')->middleware('auth:customer');
    Route::post('/resetPassword.store', 'resetPasswordStore')->name('resetPassword.store')->middleware('auth:customer');
});


Route::get('/customer-payment-invoice/{customer_payment}',[CustomerPaymentController::class,'show'])->name('payment.invoice');

Route::get('/agrement',[HomeController::class,'agrement'])->name('agreemant');
Route::post('/agrement',[HomeController::class,'agrementStore'])->name('agreemant.store');
Route::get('/agreement-package',[HomeController::class,'agreementPackage'])->name('agreementPackage');
Route::post('/agreement-package',[HomeController::class,'agreementPackageStore'])->name('agreementPackage.store');


Route::middleware(['auth:customer','hasArg'])->group(function(){
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
    Route::get('/payment', [HomeController::class,'payment'])->name('payment');
    Route::post('/payment', [HomeController::class,'paymentStore'])->name('payment.store');

    Route::get('/review', [HomeController::class,'review'])->name('review');
    Route::post('/review', [HomeController::class,'reviewStore'])->name('review.store');
    
    // Route::resource('/batches',BatchController::class)->only(['index'])->names('batch');
    // Route::resource('/courses',CourseController::class)->only(['index'])->names('course');
    // Route::resource('/students',StudentController::class)->only(['index','show'])->names('student');
});
