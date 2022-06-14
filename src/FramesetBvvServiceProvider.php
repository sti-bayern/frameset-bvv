<?php

namespace Stia\FramesetBvv;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Stia\FramesetBvv\Commands\FramesetBvvCommand;

class FramesetBvvServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('frameset-bvv')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_frameset-bvv_table')
            ->hasCommand(FramesetBvvCommand::class);
    }
}
