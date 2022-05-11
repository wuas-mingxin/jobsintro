<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::name('user.')->prefix('user')->group(function () {
    Route::get('/home', [App\Http\Controllers\WuasUserController::class, 'index'])->name('home');
    Route::get('/general-setting', [App\Http\Controllers\WuasUserController::class, 'generalSetting'])->name('generalSetting');
    Route::post('/general-setting-store', [App\Http\Controllers\WuasUserController::class, 'generalSettingStore'])->name('generalSetting.store');
    Route::get('/profile-setting', [App\Http\Controllers\WuasUserController::class, 'profileSetting'])->name('profileSetting');
    Route::post('/profile-setting-store', [App\Http\Controllers\WuasUserController::class, 'profileSettingStore'])->name('profileSetting.store');
    Route::get('/privacy-setting', [App\Http\Controllers\WuasUserController::class, 'privacySetting'])->name('privacySetting');
    Route::post('/privacy-setting-store', [App\Http\Controllers\WuasUserController::class, 'privacySettingStore'])->name('privacySetting.store');
    Route::get('/change-password-setting', [App\Http\Controllers\WuasUserController::class, 'password'])->name('password');
    Route::post('/change-password-update', [App\Http\Controllers\WuasUserController::class, 'passwordUpdate'])->name('password.update');
    Route::get('/posts', [App\Http\Controllers\WuasPostController::class, 'index'])->name('posts');
    Route::get('/comments/{post}', [App\Http\Controllers\CommentController::class, 'getCommentOfThisPost'])->name('posts.comments');
    Route::get('/comments/', [App\Http\Controllers\CommentController::class, 'getAllComments'])->name('posts.getAllComments');
    Route::post('/add-comment', [App\Http\Controllers\CommentController::class, 'addComment'])->name('posts.addComment');
    Route::get('/like/{post}', [App\Http\Controllers\WuasPostController::class, 'like'])->name('posts.like');
});


Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/login', [App\Http\Controllers\Admin\AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('login');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', function (){return "admin";})->name('dashboard');
});
