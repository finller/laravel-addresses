<?php

namespace Finller\Address;

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
            ->hasMigration('create_addresses_table')
            ->hasMigration('add_phone_number_column_to_addresses_table')
            ->hasMigration('add_email_column_to_addresses_table');
    }
}
