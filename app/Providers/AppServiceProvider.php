<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\University;
use App\Models\Banners;
use App\Models\Course;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('layouts.master', function ($view) {
            $universities = University::firstOrFail();
            $view->with('universities', $universities);
        });

        view()->composer('layouts.topnav', function ($view) {
            $universities = University::firstOrFail();
            $courses = Course::orderBy('name')->get();
            $view->with('universities', $universities);
            $view->with('courses', $courses);
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
