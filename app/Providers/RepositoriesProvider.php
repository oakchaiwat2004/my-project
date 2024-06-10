<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Eloquent\MasterRepository;
use App\Repositories\MasterRepositoryInterface;

use App\Repositories\Eloquent\RolesRepository;
use App\Repositories\RolesRepositoryInterface;

use App\Repositories\Eloquent\MembersRepository;
use App\Repositories\MembersRepositoryInterface;

use App\Repositories\Eloquent\UserRepository;
use App\Repositories\UserRepositoryInterface;


class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(MasterRepositoryInterface::class,MasterRepository::class);
        $this->app->bind(RolesRepositoryInterface::class,RolesRepository::class);

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(MembersRepositoryInterface::class, MembersRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
