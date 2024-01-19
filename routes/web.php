<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// login, register
Route::middleware('admin_auth')->group(function () {
    Route::redirect('/', 'loginPage');
    Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
    Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
    Route::middleware(['admin_auth'])->group(function () {
        // category
        Route::prefix('admin/category')->group(function () {
            Route::get('list', [CategoryController::class, 'categoryList'])->name('category#list');
            Route::post('create',[CategoryController::class, 'createCategory'])->name('category#create');
            Route::get('delete/{id}',[CategoryController::class, 'deleteCategory'])->name('category#delete');
            Route::get('editPage/{id}',[CategoryController::class, 'categoryEditPage'])->name('category#editPage');
            Route::post('edit',[CategoryController::class, 'categoryEdit'])->name('category#edit');
        });

        
        

        // admin account
        Route::prefix('admin')->group(function(){
            // profile
            Route::get('details',[AdminController::class,'details'])->name('admin#details');
            Route::get('edit',[AdminController::class,'edit'])->name('admin#edit');
            Route::post('updateUserDetails',[AdminController::class,'updateUserDetails'])->name('admin#updateUserDetails');
            Route::get('changePasswordPage',[AdminController::class,'changePasswordPage'])->name('admin#changePasswordPage');
            Route::post('changePassword',[AdminController::class,'changePassword'])->name('admin#changePassword');

            //Product Route
            Route::resource('products',ProductController::class);
            //Orders Route
            Route::post('/orders/{id}/verify', [OrderController::class,'verify'])->name('orders.verify');
            Route::delete('/orders/{id}', [OrderController::class,'destroy'])->name('orders.destroy');
            Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
            Route::get('/orders/{id}', [OrderController::class, 'show'])->name('order.show');
        });

        // admin customer
        Route::prefix('admin/customer')->group(function () {
            Route::get('list',[AdminController::class, 'customerList'])->name('admin#customer#list');
            Route::get('customer/{id}',[AdminController::class, 'changeToAdmin'])->name('admin#changeToAdmin');
            Route::get('admin/{id}',[AdminController::class, 'changeToCustomer'])->name('admin#changeToCustomer');
        });
    });

    Route::middleware(['user_auth'])->group(function () {
        

        Route::prefix('user')->group(function(){
            Route::get('/home',[HomeController::class,'index'])->name('user#home');
            Route::get('/shop',[HomeController::class,'shop'])->name('user#shop');
            Route::get('/about',[HomeController::class,'about'])->name('user#about');
            Route::get('dashboard',[HomeController::class,'dashboard'])->name('user#dashboard');
            Route::get('product/details/{id}',[HomeController::class,'detail'])->name('user#product#detail');
            Route::get('payment/{id}',[HomeController::class,'payment'])->name('user#product#payment');
            Route::post('order/create', [OrderController::class,'createOrder'])->name('order.create');
            Route::post('userUpdate',[UserController::class,'userUpdate'])->name('userUpdate');
            
        });
    });
});






    













