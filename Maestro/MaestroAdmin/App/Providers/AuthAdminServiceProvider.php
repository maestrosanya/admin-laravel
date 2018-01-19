<?php

namespace Maestro\MaestroAdmin\App\Providers;

use Maestro\MaestroAdmin\App\Policies\ArticlesPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthAdminServiceProvider extends ServiceProvider
{

    protected $policies = [
        'Maestro\MaestroAdmin\App\Models\Article' => ArticlesPolicy::class
    ];

    public function boot()
    {
        $this->registerPolicies();

        //
    }
}