<?php

namespace RobMellett\LaravelModelHistory;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RobMellett\LaravelModelHistory\Commands\LaravelModelHistoryCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-model-history_table')
            ->hasCommand(LaravelModelHistoryCommand::class);
    }
}
