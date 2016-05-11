# Translator

A translations helper for [WordPlate](https://wordplate.github.io/) built with [Polylang](https://wordpress.org/plugins/polylang/).

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
composer require wordplate/translator
```

Login to the WordPress administrator dashboard and active the [Polylang](https://wordpress.org/plugins/polylang/) plugin.

## Usage

Register the translations with the `register_translations` method.

```php
register_translations([
    'general' => [
        'general-language-english' => 'The english language',
        'general-language-swedish' => 'The swedish language',
    ],
    'contact' => [
        'contact-email' => 'Contact page email string',
        'contact-mobile' => 'Contact page mobile string',
        'contact-telephone' => 'Contact page telephone string',
    ],
]);
```

Then to fetch and print a translation you can use the `trans` method.

```php
echo trans('contact-email');
```

## License

Translator is licensed under [The MIT License (MIT)](LICENSE).
