<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\ManageUserController;

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

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
Route::get('password', [HomeController::class, 'password'])->name('password');
Route::post('password', [HomeController::class, 'passwordUpdate'])->name('password.update');
Route::get('profile', [HomeController::class, 'profile'])->name('profile');

Route::prefix('password')->name('password.')->group(function(){
    Route::get('reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('reset');
    Route::post('reset', [ForgotPasswordController::class, 'sendResetCodeEmail']);
});
Route::prefix('users')->name('users.')->group(function(){
    Route::get('/', [ManageUserController::class, 'allUsers'])->name('all');
    Route::get('active', [ManageUserController::class, 'activeUsers'])->name('active');
    Route::get('banned', [ManageUserController::class, 'bannedUsers'])->name('banned');
    Route::get('with-balance', [ManageUserController::class, 'usersWithBalance'])->name('with.balance');

    Route::get('detail/{id}', [ManageUserController::class, 'detail'])->name('detail');
    Route::get('login/{id}', [ManageUserController::class, 'login'])->name('login');
    Route::post('status/{id}', [ManageUserController::class, 'status'])->name('status');
});

Route::resource('post',PostController::class);
