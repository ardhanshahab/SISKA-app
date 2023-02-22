<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\sidebars;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
 
        View::composer('*', function($view)
        {
            $sidebars = sidebars::get();
            $view->with('sidebar', $sidebars);
        });

    }
}
