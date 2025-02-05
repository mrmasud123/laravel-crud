<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class, 'loginpage'])->name('merchant.login');

Route::get('/signup', [UserController::class, 'signup'])->name('merchant.signup');
Route::post('/createuser', [UserController::class, 'createUser'])->name('merchant.create');

Route::post('/login', [UserController::class, 'login'])->name('merchant.log');

Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/merchant/dashboard', [UserController::class, 'merchantDashboard'])->name('merchant.dashboard');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/products', [ProductController::class, 'loadProducts'])->name('merchant.products');
Route::get('/product/create', [ProductController::class, 'loadProductCreationPage'])->name('product.create');
Route::post('/product/insert', [ProductController::class, 'createProduct'])->name('product.insert');

Route::get('/category', [CategoryController::class, 'loadCategory'])->name('merchant.category');
Route::get('/category/create', [CategoryController::class, 'loadCategoryCreationPage'])->name('category.create');
Route::post('/category/insert', [CategoryController::class, 'createCategory'])->name('category.insert');

Route::get('/shop/{id}', [UserController::class, 'loadShop'])->name('shop.details');