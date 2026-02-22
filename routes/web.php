<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\TrixAttachmentController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SocialController;
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

        Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
            Route::get('/', [CoursesController::class, 'index'])->name('index');
            Route::get('/create', [CoursesController::class, 'create'])->name('create');
            Route::post('/', [CoursesController::class, 'store'])->name('store');
            Route::get('/{course}/edit', [CoursesController::class, 'edit'])->name('edit');
            Route::put('/{course}', [CoursesController::class, 'update'])->name('update');
            Route::delete('/{course}', [CoursesController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'teachers', 'as' => 'teachers.'], function () {
            Route::get('/', [TeacherController::class, 'index'])->name('index');
            Route::get('/create', [TeacherController::class, 'create'])->name('create');
            Route::post('/', [TeacherController::class, 'store'])->name('store');
            Route::get('/{teacher}/edit', [TeacherController::class, 'edit'])->name('edit');
            Route::put('/{teacher}', [TeacherController::class, 'update'])->name('update');
            Route::delete('/{teacher}', [TeacherController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
            Route::get('/', [NewsController::class, 'index'])->name('index');
            Route::get('/create', [NewsController::class, 'create'])->name('create');
            Route::post('/', [NewsController::class, 'store'])->name('store');
            Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('edit');
            Route::put('/{news}', [NewsController::class, 'update'])->name('update');
            Route::delete('/{news}', [NewsController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'events', 'as' => 'events.'], function () {
            Route::get('/', [EventsController::class, 'index'])->name('index');
            Route::get('/create', [EventsController::class, 'create'])->name('create');
            Route::post('/', [EventsController::class, 'store'])->name('store');
            Route::get('/{event}/edit', [EventsController::class, 'edit'])->name('edit');
            Route::put('/{event}', [EventsController::class, 'update'])->name('update');
            Route::delete('/{event}', [EventsController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'partners', 'as' => 'partners.'], function () {
            Route::get('/', [PartnerController::class, 'index'])->name('index');
            Route::get('/create', [PartnerController::class, 'create'])->name('create');
            Route::post('/', [PartnerController::class, 'store'])->name('store');
            Route::get('/{partner}/edit', [PartnerController::class, 'edit'])->name('edit');
            Route::put('/{partner}', [PartnerController::class, 'update'])->name('update');
            Route::delete('/{partner}', [PartnerController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'socials', 'as' => 'socials.'], function () {
            Route::get('/', [SocialController::class, 'index'])->name('index');
            Route::get('/create', [SocialController::class, 'create'])->name('create');
            Route::post('/', [SocialController::class, 'store'])->name('store');
            Route::get('/{social}/edit', [SocialController::class, 'edit'])->name('edit');
            Route::put('/{social}', [SocialController::class, 'update'])->name('update');
            Route::delete('/{social}', [SocialController::class, 'destroy'])->name('destroy');
        });
    });
});

Route::get('/', [FrontpageController::class, 'index'])->name('frontpage');
Route::group(['prefix' => 'academic', 'as' => 'academic.'], function () {
    Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
        Route::get('/', [CoursesController::class, 'frontcourse'])->name('index');
        Route::get('/{course}', [CoursesController::class, 'frontcourseShow'])->name('show');
    });
});
Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/about/{about}', [UniversityController::class, 'frontProfile'])->name('about');
    Route::group(['prefix' => 'teachers', 'as' => 'teachers.'], function () {
        Route::get('/', [TeacherController::class, 'frontteachers'])->name('index');
        Route::get('/{teacher}', [TeacherController::class, 'frontteachersShow'])->name('show');
    });
});
Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
    Route::get('/', [NewsController::class, 'frontnews'])->name('index');
    Route::get('/{news}', [NewsController::class, 'frontnewsShow'])->name('show');
});
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
