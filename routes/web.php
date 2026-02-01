<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\TrixAttachmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'portal-admin', 'as' => 'portal-admin.'], function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'loginAttempt'])->name('login.attempt');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
        Route::post('/attachments', [TrixAttachmentController::class, 'store'])->name('attachments.store');
        Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
            Route::get('/', [UniversityController::class, 'settings'])->name('index');
            Route::put('/update', [UniversityController::class, 'updateSettings'])->name('update');
        });
        Route::group(['prefix' => 'banners', 'as' => 'banners.'], function () {
            Route::get('/', [BannersController::class, 'index'])->name('index');
            Route::get('/create', [BannersController::class, 'create'])->name('create');
            Route::post('/', [BannersController::class, 'store'])->name('store');
            Route::get('/{banner}/edit', [BannersController::class, 'edit'])->name('edit');
            Route::put('/{banner}', [BannersController::class, 'update'])->name('update');
            Route::delete('/{banner}', [BannersController::class, 'destroy'])->name('destroy');
        });
    });
});

Route::get('/', [FrontpageController::class, 'index'])->name('frontpage');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/courses', function () {
    return view('pages.courses');
})->name('courses');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/news', function () {
    return view('pages.news');
})->name('news');
Route::get('/events', function () {
    return view('pages.events');
})->name('events');
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
