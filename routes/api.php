<?php

use App\Http\Controllers\user\AuthController;
use App\Http\Controllers\user\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(UserController::class)->group(function () {
    Route::get('user', 'user')->middleware(['auth:sanctum'])->name('user');
});


Route::controller(AuthController::class)->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::post('login', 'login')->name('user.login');
        Route::post('register', 'register')->name('user.register');
        Route::post('forgot-password', 'sendPasswordResetEmail')->name('user.forgot.password');
        Route::post('recover-password', 'recoverPassword')->name('user.recover.password');
        Route::post('password-recover-validity', 'passwordResetValidity')->name('user.recover.check');
    });
    Route::post('logout', 'logout')->middleware('auth')->name('user.logout');
    Route::post('email/verify', 'verifyEmail')->middleware(['guest', 'not.verified'])->name('user.verify');
});
