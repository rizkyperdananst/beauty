<?php

use App\Http\Controllers\Admin\BeautyController;
use App\Http\Controllers\Admin\CategoryBeautyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DiseaseController as ControllersDiseaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail-product/{id}', [ProductController::class, 'detail_product'])->name('detail-product');
Route::get('/detail-penyakit/{id}', [ControllersDiseaseController::class, 'detail_penyakit'])->name('detail-penyakit');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::prefix('/admin')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

        Route::resource('/category-beauty', CategoryBeautyController::class);
        Route::resource('/beauty', BeautyController::class);
        Route::resource('/user', UserController::class);
        Route::resource('/disease', DiseaseController::class);
    });
});
