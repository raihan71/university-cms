<?php

namespace App\Providers;

use App\Models\University;
use Illuminate\Support\ServiceProvider;

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
