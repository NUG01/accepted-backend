<?php

use App\Http\Controllers\user\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AuthController::class)->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::post('register', 'register')->name('user.register');
        Route::post('forgot-password', 'sendPasswordResetEmail')->name('user.forgot.password');
        Route::post('recover-password', 'recoverPassword')->name('user.recover.password');
        Route::post('password-recover-validity', 'passwordResetValidity')->name('user.recover.check');
    });
    Route::post('email/verify', 'verifyEmail')->middleware(['guest', 'not.verified'])->name('user.verify');
});
