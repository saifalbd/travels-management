<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




use App\Http\Controllers\Admin\{UtilityController};
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

use App\Models\CompanyInfo;

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

Route::get('/clear', [UtilityController::class, 'clearCaches'])->name('clear');
Route::get('/add', [UtilityController::class, 'addCaches']);




Route::controller(HomeController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::get('/service','service')->name('service');
    Route::get('/packages/{package}','packageShow')->name('package.show');
    
});






Route::get('/check',function(){
return CompanyInfo::query()->with('sLogo','rLogo')->get();
});