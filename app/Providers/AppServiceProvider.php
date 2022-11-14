<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\DB;

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
    // public function register()
    // {
    //     if (env('REDIRECT_HTTPS')) {
    //         $this->app['request']->server->set('HTTPS', true);
    //     }
    // }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $usuariosCantidad = DB::table('users')->count();
            $view->with('usuariosCantidad',$usuariosCantidad);
        });
        Paginator::useBootstrap();
    }
    // public function boot(UrlGenerator $url)
    // {
    //     if (env('REDIRECT_HTTPS')) {
    //         $url->formatScheme('https://');
    //     }
    //     Paginator::useBootstrap();
    // }
}
