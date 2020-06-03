<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Logo;
use App\Data;
use App\Red;

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
        $default   = Logo::where('type','default')->first();
        $favicon   = Logo::where('type','favicon')->first();
        $headband  = Logo::where('type','header')->first();
        $footband  = Logo::where('type','footer')->first();

        view()->share([
          'default'   => $default,
          'favicon'   => $favicon,
          'headband'  => $headband,
          'footband'  => $footband,
        ]);
    }
}
