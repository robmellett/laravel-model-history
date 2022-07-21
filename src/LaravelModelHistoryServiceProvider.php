<?php

namespace RobMellett\LaravelModelHistory;

use RobMellett\LaravelModelHistory\Commands\LaravelModelHistoryCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelModelHistoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-history')
            ->hasMigration('create_laravel-model-history_table');
    }
}
