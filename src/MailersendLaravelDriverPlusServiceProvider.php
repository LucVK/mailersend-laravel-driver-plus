<?php

namespace Lucvk\MailersendLaravelDriverPlus;

use Lucvk\MailersendLaravelDriverPlus\Commands\MailersendLaravelDriverPlusCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MailersendLaravelDriverPlusServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mailersend-laravel-driver-plus')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_mailersend_laravel_driver_plus_table')
            ->hasCommand(MailersendLaravelDriverPlusCommand::class);
    }
}
