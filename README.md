# This is my package laravel-changelog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codecycler/laravel-changelog.svg?style=flat-square)](https://packagist.org/packages/codecycler/laravel-changelog)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/codecycler/laravel-changelog/run-tests?label=tests)](https://github.com/codecycler/laravel-changelog/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/codecycler/laravel-changelog/Check%20&%20fix%20styling?label=code%20style)](https://github.com/codecycler/laravel-changelog/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codecycler/laravel-changelog.svg?style=flat-square)](https://packagist.org/packages/codecycler/laravel-changelog)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-changelog.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-changelog)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require codecycler/laravel-changelog
```

### Github
You can connect your application to your GitHub repository by adding an env variable with a user access token.

```dotenv
RELEASE_GH_API_KEY=...
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-changelog-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * The adapter being used by the package to get the releases.
     */
    'releaseAdapter' => \Codecycler\Changelog\Adapters\GithubAdapter::class,

    /**
     * The repository which should be used for release lookup.
     */
    'repository' => 'learnkit-dev/rubricsmaken-site',
];
```

Adjust the config to your needs.

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-changelog-views"
```

## Usage

### Filament page
You can view the changelog on the `/admin/changelog` page.

### Frontend
```php
<livewire:latest-version-frontend />
```

### Filament dashboard widget
You can register the `Codecycler\Changelog\Filament\Widgets\LatestVersion` widget to show the latest version on your dashboard.

## Testing

Currently there are no tests yet.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sebastiaan Kloos](https://github.com/codecyclernl)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
