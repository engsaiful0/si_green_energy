<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        // Keep generated URLs without /public when the app is served from the project root.
        if ($root = config('app.url')) {
            URL::forceRootUrl(rtrim($root, '/'));
        }
    }
}
