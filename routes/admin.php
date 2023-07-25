<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AuthController, CustomerController, CustomerPaymentController, HomeController,OptionController,
    UserController,UtilityController,PackageController};


Route::controller(AuthController::class)->group(function () {

    Route::get('/login', 'loginPage')->name('login');
    Route::post('/login', 'login')->name('login.store');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
    Route::get('/reset-password', 'resetPassword')->name('resetPassword')->middleware('auth');
    Route::post('/resetPassword.store', 'resetPasswordStore')->name('resetPassword.store')->middleware('auth');
});


Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/users', UserController::class)->names('user');

    Route::resource('/customers',CustomerController::class)->names('customer');
    Route::resource('/packages',PackageController::class)->names('package');

    Route::resource('/customer-payments',CustomerPaymentController::class)->names('customer.payment');

    Route::controller(UtilityController::class)->group(function () {
        Route::get('/settings', 'viewSetting')->name('viewSetting');
        Route::post('/setting-store', 'storeSetting')->name('storeSetting');
        Route::get('/profile', 'authInfo')->name('authInfo');
        Route::post('/profile-store', 'authUpdate')->name('authInfo.store');
    });

  







 




    Route::controller(OptionController::class)->prefix('/options')->name('option.')->group(function(){
        Route::get('/','index')->name('index');
        Route::post('/date-format','dateFormat')->name('dateFormat');
        Route::post('/sms-config','smsConfig')->name('smsConfig');
    });



 

});