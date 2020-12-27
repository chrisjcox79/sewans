<?php

namespace App\Providers;

use App\Observers\CategoryObserver;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

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
        //
        if (app()->environment('production')) {
            \URL::forceScheme('https');
        }
        Schema::defaultStringLength(191);
        // $this->app['request']->server->set('HTTPS',true);
       Category::observe(CategoryObserver::class);

    }

}
