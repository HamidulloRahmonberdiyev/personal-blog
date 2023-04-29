<?php

namespace App\Providers;

use App\Models\Appeal;
use Illuminate\Foundation\Bootstrap\BootProviders;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();

        View()->composer('components.layouts.backend.sidebar', function($view) {
            $view->with('appeals', Appeal::where('status', '0')->get());
        });
        View()->composer('components.layouts.backend.navbar', function($view) {
            $view->with('appeals', Appeal::where('status', '0')->get());
        });
    }
}
