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










Route::get('/check',function(){
return CompanyInfo::query()->with('sLogo','rLogo')->get();
});