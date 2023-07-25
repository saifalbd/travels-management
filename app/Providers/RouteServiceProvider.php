<?php

namespace App\Providers;

use App\Models\Attendance;
use App\Models\AttendanceStudent;
use App\Models\Batch;
use App\Models\Category;
use App\Models\Course;
use App\Models\Customer;
use App\Models\CustomerPayment;
use App\Models\FeeReceiptVoucher;
use App\Models\Holiday;
use App\Models\Instructor;
use App\Models\Order;
use App\Models\Package;
use App\Models\PendingStudent;
use App\Models\Product;
use App\Models\SaleInvoice;
use App\Models\Student;
use App\Models\StudentEducation;
use App\Models\Voucher;
use App\Models\VoucherLedger;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

                Route::middleware('web')->name('admin.')->prefix('/admin')
                ->group(base_path('routes/admin.php'));

                // Route::middleware('web')->name('w.')->group(base_path('routes/font.php'));

                // Route::middleware('web')->prefix('/ins')->name('ins.')->group(base_path('routes/ins.php'));

                Route::middleware('web')->prefix('/customer')->name('customer.')->group(base_path('routes/customer.php'));
        });



        Route::model('customer',Customer::class);
        Route::model('customer_payment',CustomerPayment::class);
        Route::model('package',Package::class);
       
    }
}
