<?php

namespace ScaleXY\LaravelTypst;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ScaleXY\LaravelTypst\Commands\LaravelTypstCommand;

class LaravelTypstServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-typst')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-typst_table')
            ->hasCommand(LaravelTypstCommand::class);
    }
}
