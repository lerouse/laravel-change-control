# Laravel Change Control

<a href="https://packagist.org/packages/lerouse/laravel-change-control"><img src="https://github.com/lerouse/laravel-change-control/actions/workflows/laravel-change-control-php-8-1.yml/badge.svg"></a>
<a href="https://packagist.org/packages/lerouse/laravel-change-control"><img src="https://img.shields.io/packagist/v/lerouse/laravel-change-control" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/lerouse/laravel-change-control"><img src="https://img.shields.io/packagist/l/lerouse/laravel-change-control" alt="License"></a>

Laravel change control/version management package.

## Installation

The recommended method to install LaravelChangeControl is with [composer](https://getcomposer.org)

```bash
php composer require lerouse/laravel-change-control
```

### Laravel without auto-discovery

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
\Lerouse\LaravelChangeControl\LaravelChangeControlServiceProvider::class,
```

### Package configuration

Copy the package configuration to your local config directory.

```bash
php artisan vendor:publish --tag=change-control-config
```

## Usage

### Changelog Setup

To use the repository create a ```changelog.md``` file located in the root of your Laravel project.

Add change/version information to the newly created ```changelog.md``` file in the following format:-

```markdown
## v2.1.3

+ Second PATCH release

## v2.1.0

+ Second MINOR release

## v2.0.1

+ First PATCH release

## v2.0.0

+ Second MAJOR release

## v1.0.0

+ First MAJOR release

## v0.1.0

+ Initial pre-release
```

### Version Helper

Access the version object using the version helper:-

````php
$version = version();
````

To display the latest changelog version use the version helper:-

````php
// outputs v2.1.3 (from the above changelog example)
$version = version()->get();
````

Return the full changelog:-

````php
// outputs the full changelog as a plain string
$version = version()->changelog();
````

## License

Laravel Change Control is free software distributed under the terms of the MIT license.