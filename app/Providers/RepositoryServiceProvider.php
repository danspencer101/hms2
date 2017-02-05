<?php

namespace App\Providers;

use HMS\Entities\Meta;
use HMS\Entities\Role;
use HMS\Entities\User;
use HMS\Entities\Invite;
use HMS\Entities\Profile;
use HMS\Repositories\MetaRepository;
use HMS\Repositories\RoleRepository;
use HMS\Repositories\UserRepository;
use HMS\Repositories\InviteRepository;
use HMS\Repositories\ProfileRepository;
use Illuminate\Support\ServiceProvider;
use HMS\Repositories\Doctrine\DoctrineMetaRepository;
use HMS\Repositories\Doctrine\DoctrineRoleRepository;
use HMS\Repositories\Doctrine\DoctrineUserRepository;
use HMS\Repositories\Doctrine\DoctrineInviteRepository;
use HMS\Repositories\Doctrine\DoctrineProfileRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MetaRepository::class, function ($app) {
            return new DoctrineMetaRepository($app['em'], $app['em']->getClassMetaData(Meta::class));
        });

        $this->app->singleton(InviteRepository::class, function ($app) {
            return new DoctrineInviteRepository($app['em'], $app['em']->getClassMetaData(Invite::class));
        });

        $this->app->singleton(RoleRepository::class, function ($app) {
            return new DoctrineRoleRepository($app['em'], $app['em']->getClassMetaData(Role::class));
        });

        $this->app->singleton(UserRepository::class, function ($app) {
            return new DoctrineUserRepository($app['em'], $app['em']->getClassMetaData(User::class));
        });

        $this->app->singleton(ProfileRepository::class, function ($app) {
            return new DoctrineProfileRepository($app['em'], $app['em']->getClassMetaData(Profile::class));
        });
    }
}
