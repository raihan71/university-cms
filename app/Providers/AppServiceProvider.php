<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\University;
use App\Models\Banners;

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
