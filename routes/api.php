<?php

use App\Http\Controllers\ResultController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestTypeController;
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


Route::middleware(['auth'])->group(function () {
    Route::controller(TestController::class)->group(function () {
        Route::get('tests/{type:id}', 'index')->name('test.index');
        Route::get('user-tests/{id}', 'show')->name('test.show');
        Route::get('user-tests/results/{id}', 'results')->name('test.results');
    });
    Route::controller(TestTypeController::class)->group(function () {
        Route::get('test-types', 'index')->name('test.type.index');
    });
    Route::controller(ResultController::class)->group(function () {
        Route::get('test-result/{result:id}', 'index')->name('result.index');
        Route::post('store-result', 'store')->name('result.store');
    });
    Route::controller(UserController::class)->group(function () {
        Route::post('user/profile-update/{user}', 'edit')->name('user.edit');
    });
});





Route::controller(AuthController::class)->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::post('login', 'login')->middleware('throttle:6')->name('user.login');
        Route::post('register', 'register')->name('user.register');
        Route::post('forgot-password', 'sendPasswordResetEmail')->name('user.forgot.password');
        Route::post('recover-password', 'recoverPassword')->name('user.recover.password');
        Route::post('password-recover-validity', 'passwordResetValidity')->name('user.recover.check');
    });
    Route::post('logout', 'logout')->middleware('auth')->name('user.logout');
    Route::post('email/verify', 'verifyEmail')->middleware(['guest', 'not.verified'])->name('user.verify');
});
