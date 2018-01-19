<?php

namespace Maestro\MaestroAdmin\App\Providers;

use Illuminate\Support\ServiceProvider;

class MaestroAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'admin');
        
        $this->loadRoutesFrom(__DIR__ . '/../../routes/route.php');
        
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishes([
            __DIR__.'/../../public/css' => public_path('vendor/maestro/maestro-admin/css'),
        ], 'admin');

        $this->publishes([
            __DIR__.'/../../public/fonts' => public_path('vendor/maestro/maestro-admin/fonts'),
        ], 'admin');

        $this->publishes([       
            __DIR__.'/../../public/js' => public_path('vendor/maestro/maestro-admin/js'),                                               
        ], 'admin');


    }

    public function register()
    {

    }
}