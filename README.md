## WARNING! This package is no longer maintained.

# Translator

A translations helper for [WordPlate](https://wordplate.github.io/) built with [Polylang](https://wordpress.org/plugins/polylang/).

[![StyleCI](https://styleci.io/repos/58547586/shield?style=flat)](https://styleci.io/repos/58547586)
[![Latest Version](https://img.shields.io/github/release/wordplate/translator.svg?style=flat)](https://github.com/wordplate/translator/releases)
[![License](https://img.shields.io/packagist/l/wordplate/translator.svg?style=flat)](https://packagist.org/packages/wordplate/translator)

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

## Documentation

Please visit [Polylang's documentation](https://wordpress.org/plugins/polylang/) to find out more about translating your post types.

## License

[MIT](LICENSE) © [Vincent Klaiber](https://vinkla.com)
