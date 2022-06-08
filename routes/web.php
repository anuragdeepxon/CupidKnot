<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\GoogleSocialiteController;

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function () {
    Route::get('/matching', [UserController::class, 'index']);
    Route::get('/all', [AdminController::class, 'json']);

    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/profile/update', [UserController::class, 'profile_update'])->name('update');
});


Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleSocialiteController::class, 'handleCallback']);


Route::group(['prefix' => 'admin', 'middleware' =>  'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.route');
});
