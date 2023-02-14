<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

// Route::redirect('/','loginPage');
// Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
// Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');
// Route::post('register',[AuthController::class,'register'])->name('auth#register');
// Route::post('loginUser',[AuthController::class,'loginUser'])->name('auth#login');
// Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
// Route::get('list',[AdminController::class,'list'])->name('list');
// Route::get('user/home',[AdminController::class,'home'])->name('user#home');
// Route::redirect('/','loginPage');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
// });

// login, register
Route::middleware('admin_auth')->group(function () {
    Route::redirect('/', 'loginPage');
    Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
    Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::middleware(['admin_auth'])->group(function () {
        // category
        Route::prefix('admin/category')->group(function () {
            Route::get('list', [CategoryController::class, 'list'])->name('category#list');
        });

        // admin account
        Route::prefix('admin')->group(function(){
            // profile
            Route::get('details',[AdminController::class,'details'])->name('admin#details');
        });
    });

    Route::middleware(['user_auth'])->group(function () {
        Route::get('user/home', function () {
            return view('user.home');
        })->name('user#home');
    });
});

// Route::get('master',function(){
//     return view('admin.layouts.master');
// });
