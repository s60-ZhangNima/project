<?php

namespace App\Providers;

use App\Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $links=Link::all();
        //dd($links);
        view()->composer('layouts.master', function ($view) use($links) {
            $view->with('links', $links);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
