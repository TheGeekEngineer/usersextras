<?php

namespace TheGeekEnginner\UsersExtras;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TheGeekEnginner\UsersExtras\Commands\UsersExtrasCommand;

class UsersExtrasServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('usersextras')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_usersextras_table')
            ->hasCommand(UsersExtrasCommand::class);
    }
}
