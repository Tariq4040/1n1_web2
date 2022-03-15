<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\servicePageController;
use App\Http\Controllers\hostingPageController;

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

Auth::routes();

Route::get('/', [homePageController::class , 'home'])->name('homePage');
Route::get('/index', [HomeController::class, 'index']);
Route::get('/home', [homePageController::class , 'home'])->name('homePage');
Route::get('/services', [servicePageController::class , 'services'])->name('servicesPage');
Route::get('/hosting', [hostingPageController::class , 'hosting'])->name('hostingPage');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/login','admin.login')->name('admin.login');
        Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
    });
    
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

    });
});