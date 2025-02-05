<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('merchant.login');

Route::get('/signup', [UserController::class, 'signup'])->name('merchant.signup');
