<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class MacroableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($redirect_route, $route_params = null, $message) {
            return Response::redirectToRoute($redirect_route, $route_params)->with('toast_success', $message);
        });

        Response::macro('error', function ($redirect_route, $route_params = null, $message) {
            return Response::redirectToRoute($redirect_route, $route_params)->with('toast_error', $message);
        });

        Response::macro('warning', function ($redirect_route, $route_params = null, $message) {
            return Response::redirectToRoute($redirect_route, $route_params)->with('toast_warning', $message);
        });
    }
}
