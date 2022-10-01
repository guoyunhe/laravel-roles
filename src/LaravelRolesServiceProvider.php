<?php

namespace GuoYunhe\LaravelRoles;

use GuoYunhe\LaravelRoles\Commands\LaravelRolesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRolesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-roles')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-roles_table')
            ->hasCommand(LaravelRolesCommand::class);
    }
}
