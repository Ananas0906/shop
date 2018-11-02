<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;

class SiteProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {View::composer('layouts.main','App\Providers\ViewComposers\SiteComposer');
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
