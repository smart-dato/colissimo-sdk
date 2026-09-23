# Colissimo SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smart-dato/colissimo-sdk.svg?style=flat-square)](https://packagist.org/packages/smart-dato/colissimo-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/colissimo-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/smart-dato/colissimo-sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/colissimo-sdk/code-style.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/smart-dato/colissimo-sdk/actions?query=workflow%3A%22Code+style%22+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/smart-dato/colissimo-sdk.svg?style=flat-square)](https://packagist.org/packages/smart-dato/colissimo-sdk)

This package provides a PHP SDK for integrating with Colissimo shipping services. It allows you to generate labels, track shipments, and interact with Colissimo's SOAP API.

## Installation

You can install the package via composer:

```bash
composer require smart-dato/collisimo-sdk
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="collisimo-sdk-config"
```

## Usage

```php
use SmartDato\ColissimoSdk\Colissimo;

$colissimo = new Colissimo();

// Generate a shipping label
$generateLabelParams = new \SmartDato\ColissimoSdk\Type\GenerateLabel(/* parameters */);
$labelResponse = $colissimo->generateLabel($generateLabelParams);

// Track a shipment
$trackParams = new \SmartDato\ColissimoSdk\Type\Track(/* parameters */);
$trackResponse = $colissimo->getTrack($trackParams);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SmartDato](https://github.com/smart-dato)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
