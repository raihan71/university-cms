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
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KemahasiswaanController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PMBController;
use App\Http\Controllers\UsersController;

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

        Route::group(['prefix' => 'calendar', 'as' => 'calendar.'], function () {
            Route::get('/details', [CalendarController::class, 'details'])->name('details');
            Route::put('/details/{id}', [CalendarController::class, 'updateDetails'])->name('updateDetails');
            Route::get('/', [CalendarController::class, 'index'])->name('index');
            Route::get('/create', [CalendarController::class, 'create'])->name('create');
            Route::post('/', [CalendarController::class, 'store'])->name('store');
            Route::get('/{calendar}/edit', [CalendarController::class, 'edit'])->name('edit');
            Route::put('/{calendar}', [CalendarController::class, 'update'])->name('update');
            Route::delete('/{calendar}', [CalendarController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'facilities', 'as' => 'facilities.'], function () {
            Route::get('/', [FacilityController::class, 'index'])->name('index');
            Route::get('/create', [FacilityController::class, 'create'])->name('create');
            Route::post('/', [FacilityController::class, 'store'])->name('store');
            Route::get('/{facility}/edit', [FacilityController::class, 'edit'])->name('edit');
            Route::put('/{facility}', [FacilityController::class, 'update'])->name('update');
            Route::delete('/{facility}', [FacilityController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'kemahasiswaan', 'as' => 'kemahasiswaan.'], function () {
            Route::get('/', [KemahasiswaanController::class, 'index'])->name('index');
            Route::get('/create', [KemahasiswaanController::class, 'create'])->name('create');
            Route::post('/', [KemahasiswaanController::class, 'store'])->name('store');
            Route::get('/{kemahasiswaan}/edit', [KemahasiswaanController::class, 'edit'])->name('edit');
            Route::put('/{kemahasiswaan}', [KemahasiswaanController::class, 'update'])->name('update');
            Route::delete('/{kemahasiswaan}', [KemahasiswaanController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'scholarships', 'as' => 'scholarships.'], function () {
            Route::get('/', [ScholarshipController::class, 'index'])->name('index');
            Route::get('/create', [ScholarshipController::class, 'create'])->name('create');
            Route::post('/', [ScholarshipController::class, 'store'])->name('store');
            Route::get('/{scholarship}/edit', [ScholarshipController::class, 'edit'])->name('edit');
            Route::put('/{scholarship}', [ScholarshipController::class, 'update'])->name('update');
            Route::delete('/{scholarship}', [ScholarshipController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
            Route::get('/', [GalleryController::class, 'index'])->name('index');
            Route::get('/create', [GalleryController::class, 'create'])->name('create');
            Route::post('/create', [GalleryController::class, 'store'])->name('store');
            Route::delete('/{gallery}', [GalleryController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'payment', 'as' => 'payment.'], function () {
            Route::get('/', [PaymentController::class, 'index'])->name('index');
            Route::get('/create', [PaymentController::class, 'create'])->name('create');
            Route::post('/', [PaymentController::class, 'store'])->name('store');
            Route::delete('/{payment}', [PaymentController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'pmb', 'as' => 'pmb.'], function () {
            Route::get('/', [PMBController::class, 'index'])->name('index');
            Route::get('/create', [PMBController::class, 'create'])->name('create');
            Route::get('/detail', [PMBController::class, 'detail'])->name('detail');
            Route::put('/detail/{id}', [PMBController::class, 'storeDetail'])->name('storeDetail');
            Route::post('/', [PMBController::class, 'store'])->name('store');
            Route::delete('/{pmb}', [PMBController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/', [UsersController::class, 'index'])->name('index');
            Route::get('/create', [UsersController::class, 'create'])->name('create');
            Route::post('/', [UsersController::class, 'store'])->name('store');
            Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('edit');
            Route::put('/{user}', [UsersController::class, 'update'])->name('update');
            Route::delete('/{user}', [UsersController::class, 'destroy'])->name('destroy');
        });
    });
});

Route::get('/', [FrontpageController::class, 'index'])->name('frontpage');
Route::group(['prefix' => 'academic', 'as' => 'academic.'], function () {
    Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
        Route::get('/', [CoursesController::class, 'frontcourse'])->name('index');
        Route::get('/{course}', [CoursesController::class, 'frontcourseShow'])->name('show');
    });
    Route::get('/calendar', [CalendarController::class, 'frontcalendar'])->name('calendar');
    Route::get('/rules', [FrontpageController::class, 'frontrules'])->name('rules');
    Route::get('/facilities', [FrontpageController::class, 'frontfacilities'])->name('facilities');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/about/{about}', [UniversityController::class, 'frontProfile'])->name('about');
    Route::group(['prefix' => 'teachers', 'as' => 'teachers.'], function () {
        Route::get('/', [TeacherController::class, 'frontteachers'])->name('index');
        Route::get('/{teacher}', [TeacherController::class, 'frontteachersShow'])->name('show');
    });
});
Route::group(['prefix' => 'info', 'as' => 'info.'], function () {
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::post('/search', [NewsController::class, 'frontnews'])->name('search');
        Route::get('/{type}', [NewsController::class, 'frontnewsType'])->name('type');
        Route::get('/detail/{news}', [NewsController::class, 'frontnewsShow'])->name('show');
    });
    Route::group(['prefix' => 'events', 'as' => 'events.'], function () {
        Route::get('/', [EventsController::class, 'frontevents'])->name('index');
        Route::get('/{event}', [EventsController::class, 'fronteventsShow'])->name('show');
    });
    Route::get('/gallery', [GalleryController::class, 'frontgallery'])->name('gallery');
    Route::group(['prefix' => 'pmb', 'as' => 'pmb.'], function () {
        Route::get('/{pmb}', [PMBController::class, 'frontpmbShow'])->name('show');
    });
});

Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
    Route::get('/kemahasiswaan/{service}', [KemahasiswaanController::class, 'frontservicesShow'])->name('show');
    Route::get('/kemahasiswaan-beasiswa', [ScholarshipController::class, 'frontservicesShow'])->name('scholarships.show');
    Route::get('/baak/pmb', [PaymentController::class, 'frontservicesShow'])->name('pmb.show');
});

Route::get('/contact', [FrontpageController::class, 'frontcontact'])->name('contact');
Route::post('/course/send-email', [MailController::class, 'askQuestionProgram'])->name('course.sendEmail');
Route::post('/contact/send-email', [MailController::class, 'contact'])->name('contact.sendEmail');
