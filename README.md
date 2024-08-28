# Attribute based Enum descriptors.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/intrfce/enum-attribute-descriptors.svg?style=flat-square)](https://packagist.org/packages/intrfce/enum-attribute-descriptors)
[![Total Downloads](https://img.shields.io/packagist/dt/intrfce/enum-attribute-descriptors.svg?style=flat-square)](https://packagist.org/packages/intrfce/enum-attribute-descriptors)
![GitHub Actions](https://github.com/intrfce/enum-attribute-descriptors/actions/workflows/main.yml/badge.svg)

Have you ever written an enum for something and wanted to have a "nice" version of the enum name, so you write something like this:

```php
<?php

enum Colour: string {

    case RED = 'red';
    case BLUE = 'blue';
    case GREEN = 'green';

    public function getTitle()
    {
        return match($this->value) {
            'blue' => "Dark Blue",
            'red' => "Blood Red"
            default => ucfirst($this->value),
        };
    }
}
```

But the problem is, for each new `case`, you have to add something to the `match` statement, or HOPE that it'll print something out that's legible using the `default` fallback?

With this package, you can co-locate titles, and even descriptions, with your enum cases like so:

```php
<?php

enum Colour: string {

    use UsesAttributeBasedDescriptors;

    #[Title('Blood Red')]
    #[Description('Our primary highlight colour')]
    case RED = 'red';

    #[Title('Dark Blue')]
    #[Description('Our primary logo colour')]
    case BLUE = 'blue';

    #[Title('Army Green')]
    #[Description('Only use this for background colours.')]
    case GREEN = 'green';
}
```

Neat huh!

## Installation

You can install the package via composer:

```bash
composer require intrfce/enum-attribute-descriptors
```

## Usage

Just add the `Intrfce\EnumAttributeDescriptors\Concerns\UsesAttributeBasedDescriptors` trait to your enum, and you're good to go!

Simple!

## Credits

-   [Dan Matthews](https://github.com/intrfce)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
