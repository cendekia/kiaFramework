<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.layouts.sidebar', 'App\Http\Composers\NavigationComposer');
        view()->composer('admin.layouts.breadcrumb', 'App\Http\Composers\BreadcrumbComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
