<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\University;
use App\Models\Course;
use App\Models\Social;
use App\Models\Kemahasiswaan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('layouts.master', function ($view) {
            $universities = University::firstOrFail();
            $socials = Social::where('name', '!=', 'youtube video-tour')->orderBy('name')->get();
            $view->with('universities', $universities);
            $view->with('socials', $socials);
        });

        view()->composer('layouts.topnav', function ($view) {
            $universities = University::firstOrFail();
            $courses = Course::orderBy('name')->get();
            $view->with('universities', $universities);
            $view->with('courses', $courses);
            $view->with('kemahasiswaans', Kemahasiswaan::orderBy('name')->get());
        });

        view()->composer('layouts.dashboard', function ($view) {
            $universities = University::firstOrFail();
            $view->with('universities', $universities);
        });

        view()->composer('layouts.auth', function ($view) {
            $universities = University::firstOrFail();
            $view->with('universities', $universities);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
