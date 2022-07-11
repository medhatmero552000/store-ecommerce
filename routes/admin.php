<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



/*
|-------------------------------------------------------------------------
| The Route Checked if User Admin or not:
|-------------------------------------------------------------------------
|   First check Middleware -> Authenticate.php -> method[redirectTo]
|       - if admin redirect him to admin login page
|       - else redirect to user login page
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin','prefix' =>'/admin'], function () {
            Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
            // Delivers Routes
            Route::group(['prefix' => 'settings'], function () {
                Route::get('shipping/{type}', [SettingController::class, 'editShipping'])->name('edit.shipping.Method');
                Route::put('shipping/{id}', [SettingController::class, 'updateShipping'])->name('update.shipping.Method');
            });
        });

        Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin','prefix' =>'/admin'], function () {

            Route::get('login', [LoginController::class, 'login'])->name('admin.login');
            Route::post('login', [LoginController::class, 'postLogin'])->name('admin.post.login');
        });
    }
);
