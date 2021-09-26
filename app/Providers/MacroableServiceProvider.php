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
        Response::macro('success', function ($redirect_route, $message, $route_params = null, $toast = true) {
            $type = $toast ? 'toast_success' : 'success';
            return Response::redirectToRoute($redirect_route, $route_params)->with($type, $message);
        });

        Response::macro('error', function ($redirect_route, $message, $route_params = null, $toast = true) {
            $type = $toast ? 'toast_error' : 'error';
            return Response::redirectToRoute($redirect_route, $route_params)->with($type, $message);
        });

        Response::macro('warning', function ($redirect_route, $message, $route_params = null, $toast = true) {
            $type = $toast ? 'toast_warning' : 'warning';
            return Response::redirectToRoute($redirect_route, $route_params)->with($type, $message);
        });

        Response::macro('info', function ($redirect_route, $message, $route_params = null, $toast = true) {
            $type = $toast ? 'toast_info' : 'info';
            return Response::redirectToRoute($redirect_route, $route_params)->with($type, $message);
        });

        Response::macro('question', function ($redirect_route, $message, $route_params = null, $toast = true) {
            $type = $toast ? 'toast_question' : 'question';
            return Response::redirectToRoute($redirect_route, $route_params)->with($type, $message);
        });

        Response::macro('back', function ($message, $type, $toast = true) {
            $t = $toast ? 'toast_' . $type : $type;
            return Redirect::back()->with($t, $message);
        });
    }
}
