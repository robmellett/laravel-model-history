
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Track model history

[![Latest Version on Packagist](https://img.shields.io/packagist/v/robmellett/laravel-model-history.svg?style=flat-square)](https://packagist.org/packages/robmellett/laravel-model-history)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/robmellett/laravel-model-history/run-tests?label=tests)](https://github.com/robmellett/laravel-model-history/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/robmellett/laravel-model-history/Check%20&%20fix%20styling?label=code%20style)](https://github.com/robmellett/laravel-model-history/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/robmellett/laravel-model-history.svg?style=flat-square)](https://packagist.org/packages/robmellett/laravel-model-history)

This little package will create a `history_events` table, so that you can track model Created and Updated events, along with the data changing between updates.

## Installation

You can install the package via composer:

```bash
composer require robmellett/laravel-model-history
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="model-history-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="model-history-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

You can add the `Historize` trait to your model, and the CREATED and UPDATED events will be fired when the model is created and updated.

```php
class Product extends Model
{
    use Historize;
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/robmellett/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rob Mellett](https://github.com/robmellett)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
