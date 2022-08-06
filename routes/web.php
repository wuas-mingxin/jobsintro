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
    Route::prefix('setting')->name('setting.')->group(function(){
        Route::get('/general-setting', [App\Http\Controllers\WuasUserController::class, 'generalSetting'])->name('generalSetting');
        Route::post('/general-setting-store', [App\Http\Controllers\WuasUserController::class, 'generalSettingStore'])->name('generalSetting.store');
        Route::get('/profile-setting', [App\Http\Controllers\WuasUserController::class, 'profileSetting'])->name('profileSetting');
        Route::post('/profile-setting-store', [App\Http\Controllers\WuasUserController::class, 'profileSettingStore'])->name('profileSetting.store');
        Route::get('/privacy-setting', [App\Http\Controllers\WuasUserController::class, 'privacySetting'])->name('privacySetting');
        Route::post('/privacy-setting-store', [App\Http\Controllers\WuasUserController::class, 'privacySettingStore'])->name('privacySetting.store');
        Route::get('/change-password-setting', [App\Http\Controllers\WuasUserController::class, 'password'])->name('password');
        Route::post('/change-password-update', [App\Http\Controllers\WuasUserController::class, 'passwordUpdate'])->name('password.update');
        Route::get('check-current-password', [App\Http\Controllers\WuasUserController::class, 'checkPassword'])->name('ckeckPass');
        Route::get('manage-sessions', [App\Http\Controllers\WuasUserController::class, 'manageSessions'])->name('manage.sessions');
        Route::get('two-factor', [App\Http\Controllers\WuasUserController::class, 'twofactor'])->name('twofactor');
        Route::post('/two-factor-update', [App\Http\Controllers\WuasUserController::class, 'twofactorUpdate'])->name('twofactor.update');
        Route::get('social-links', [App\Http\Controllers\WuasUserController::class, 'socialinks'])->name('socialinks');
        Route::post('social-links-update', [App\Http\Controllers\WuasUserController::class, 'socialinksUpdate'])->name('socialinks.update');
        Route::get('notifications-settings', [App\Http\Controllers\WuasUserController::class, 'notifications'])->name('notify');
        Route::post('notifications-settings-update', [App\Http\Controllers\WuasUserController::class, 'notificationsUpdate'])->name('notify.update');
    });
    Route::get('add-new-friend', [App\Http\Controllers\WuasUserController::class, 'aadFriendList'])->name('friend.list');
    Route::get('follow-friend', [App\Http\Controllers\WuasUserController::class, 'followFriend'])->name('friend.list');
    Route::get('/posts', [App\Http\Controllers\WuasPostController::class, 'index'])->name('posts');
    Route::get('/comments/{post}', [App\Http\Controllers\CommentController::class, 'getCommentOfThisPost'])->name('posts.comments');
    Route::get('/comments/', [App\Http\Controllers\CommentController::class, 'getAllComments'])->name('posts.getAllComments');
    Route::post('/add-comment', [App\Http\Controllers\CommentController::class, 'addComment'])->name('posts.addComment');
    Route::get('/like/{post}', [App\Http\Controllers\WuasPostController::class, 'like'])->name('posts.like');
});


Route::middleware('guest:admin')->prefix('wuas-login')->name('admin.')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('login.submit');
});

Route::get('placeholder-image/{size}', [App\Http\Controllers\HomeController::class, 'placeholderImage'])->name('placeholder.image');
