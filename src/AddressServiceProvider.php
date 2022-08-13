<?php

namespace Finller\Address;

use Finller\Address\Commands\AddressCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AddressServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-addresses')
            // ->hasConfigFile()
            // ->hasViews()
            ->hasMigration('create_addresses_table');
            // ->hasCommand(AddressCommand::class);
    }
}
