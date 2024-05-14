<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        'App\Models\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        $this->registerPolicies();
        Gate::before(function ($user,$ability){
            if($user->checkRoles('SADM')){
                return true;
            }
        });

        Gate::define('SADM', function ($user){
            return $user->checkRoles('SADM');
        });

        Gate::define('MOD', function ($user){
            return $user->checkRoles('MOD');
        });

        Gate::define('EDT', function ($user){
            return $user->checkRoles('EDT');
        });

        Gate::define('VWR', function ($user){
            return $user->checkRoles('VWR');
        });
    }
    }
