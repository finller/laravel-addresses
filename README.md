# A simple package to store Addresses in Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/finller/laravel-addresses.svg?style=flat-square)](https://packagist.org/packages/finller/laravel-addresses)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/finller/laravel-addresses/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/finller/laravel-addresses/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/finller/laravel-addresses/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/finller/laravel-addresses/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/finller/laravel-addresses.svg?style=flat-square)](https://packagist.org/packages/finller/laravel-addresses)

This package provide a standard Address Eloquent model to use in any project.

## Installation

You can install the package via composer:

```bash
composer require finller/laravel-addresses
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="addresses-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="addresses-config"
```

## Usage

```php
use Finller\Address\HasAddresses;

class User
{
    use HasAddresses;
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/quentinGab/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Quentin Gabriele](https://github.com/quentinGab)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
