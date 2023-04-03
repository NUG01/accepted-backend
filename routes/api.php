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
    Route::post('register', 'register')->middleware('guest')->name('user.register');
    // Route::post('email/verify', 'verifyEmail')->name('user.verify');
    Route::post('email/verify', 'verifyEmail')->middleware(['guest', 'not.verified'])->name('user.verify');
});
