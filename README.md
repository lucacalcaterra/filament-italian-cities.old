# This is my package filament-italian-cities

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lucacalcaterra/filament-italian-cities.svg?style=flat-square)](https://packagist.org/packages/lucacalcaterra/filament-italian-cities)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lucacalcaterra/filament-italian-cities/run-tests?label=tests)](https://github.com/lucacalcaterra/filament-italian-cities/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lucacalcaterra/filament-italian-cities/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lucacalcaterra/filament-italian-cities/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lucacalcaterra/filament-italian-cities.svg?style=flat-square)](https://packagist.org/packages/lucacalcaterra/filament-italian-cities)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require lucacalcaterra/filament-italian-cities
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-italian-cities-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-italian-cities-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-italian-cities-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-italian-cities = new LucaCalcaterra\FilamentItalianCities();
echo $filament-italian-cities->echoPhrase('Hello, LucaCalcaterra!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Luca Calcaterra](https://github.com/lucacalcaterra)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
