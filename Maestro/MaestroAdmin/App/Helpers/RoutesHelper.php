<?php

namespace Maestro\MaestroAdmin\App\Helpers;

use Illuminate\Support\Facades\Route;

class RoutesHelper
{

    protected $routeName = [];

    protected $routes;

    public function __construct()
    {
        $this->routes = Route::getRoutes()->get();
        $this->RoutesForAdmin();
    }

    public function RoutesForAdmin()
    {
        if (is_array($this->routes)) {
            foreach ($this->routes as $route) {

                if (str_is('admin*', $route->uri)) {
                   $this->routeName[] = $route->uri;
                }

            }
        }
    }

    public function get()
    {
        return $this->routeName;
    }
    /*$routes =

        // $routes = new RouteCollection;
    echo "<pre>";

    if (is_array($routes)) {
    foreach ($routes as $route) {

    if (str_is('admin*', $route->uri)) {
    $routeName[] = $route->uri;
    }

    }
    }*/
}