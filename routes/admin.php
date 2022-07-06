<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Dashboard  Routes
|--------------------------------------------------------------------------
| - Contains all dashboard routes
| - All Prefix inside RouteServiceProvider.php -> File
*/

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('users', function () {
        return 'in admin page';
    });
});


/*
|-------------------------------------------------------------------------
| The Route Checked if User Admin or not:
|-------------------------------------------------------------------------
|   First check Middleware -> Authenticate.php -> method[redirectTo]
|       - if admin redirect him to admin login page
|       - else redirect to user login page
*/

Route::group(['namespace' => 'Admin','middleware' =>'guest:admin'], function () {

    Route::get('login',[LoginController::class,'login'])->name('admin.login');
    Route::post('login',[LoginController::class,'postLogin'])->name('admin.post.login');

});

Route::group(['namespace' => 'Admin','middleware'=>'auth:admin'], function () {
    Route::get('/',[LoginController::class,'index'])->name('admin.index');

});

