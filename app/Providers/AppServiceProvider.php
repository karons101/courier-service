<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Fix for older MySQL / SQLite index length issues
         * (Safe even if you are only using SQLite)
         */
        Schema::defaultStringLength(191);

        /**
         * Force HTTPS in production (Render uses HTTPS)
         * Prevents mixed-content + Vite asset issues
         */
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
