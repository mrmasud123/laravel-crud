<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('merchant.login');

Route::get('/signup', [UserController::class, 'signup'])->name('merchant.signup');
Route::post('/createuser', [UserController::class, 'createUser'])->name('merchant.create');

Route::post('/login', [UserController::class, 'login'])->name('merchant.log');

Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/merchant/dashboard', [UserController::class, 'merchantDashboard'])->name('merchant.dashboard');