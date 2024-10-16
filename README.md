# Heroicons in your Laravel Blade views.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zephyrphp/blade-heroicons.svg?style=flat-square)](https://packagist.org/packages/zephyrphp/blade-heroicons)
[![Total Downloads](https://img.shields.io/packagist/dt/zephyrphp/blade-heroicons.svg?style=flat-square)](https://packagist.org/packages/zephyrphp/blade-heroicons)

For a full list of available icons see [heroicons.com](https://heroicons.com). 
Heroicons are originally developed by Steve Schoger and Adam Wathan.

## Installation

Install the package via composer:

```bash
composer require zephyrphp/blade-heroicons
```

You **must** modify your `tailwind.config.js` file to include blade-heroicons views:

```js
content: [
    // ...
    './vendor/zephyrphp/blade-heroicons/**/*.blade.php'
]
```

You **can** publish the config file with:

```bash
php artisan vendor:publish --tag="blade-heroicons-config"
```

This is the contents of the published config file:

```php
return [

    /*
    |-----------------------------------------------------------------
    | Default Namespace
    |-----------------------------------------------------------------
    |
    | This config option allows you to define a default namespace for
    | your icons. By default, Blade Heroicons will look for icons in
    | the "ui" namespace. You can change this value to any string.
    | usage: <x-icon::academic-cap />
    */

    'namespace' => 'icon',

];
```

You **can** publish the views using

```bash
php artisan vendor:publish --tag="blade-heroicons-views"
```

## Usage

```php
// By default, use solid variant
<x-icon::academic-cap />

// You can also use others variants
<x-icon::academic-cap variant="micro" />
<x-icon::academic-cap variant="mini" />
<x-icon::academic-cap variant="solid" />
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Fabrice Planchette](https://github.com/fabpl)
- [Heroicons](https://heroicons.com)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
