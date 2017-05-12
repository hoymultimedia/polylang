# Polylang

A [Polylang](https://wordpress.org/plugins/polylang) helper for [WordPlate](https://wordplate.github.io).

[![StyleCI](https://styleci.io/repos/58547586/shield?style=flat)](https://styleci.io/repos/58547586)
[![Latest Version](https://img.shields.io/github/release/wordplate/polylang.svg?style=flat)](https://github.com/wordplate/polylang/releases)
[![License](https://img.shields.io/packagist/l/wordplate/polylang.svg?style=flat)](https://packagist.org/packages/wordplate/polylang)

## Installation

Require this package, with [Composer](https://getcomposer.org), in the root directory of your project.

```bash
composer require wordplate/polylang
```

Login to the WordPress administrator dashboard and activate the [Polylang](https://wordpress.org/plugins/polylang) plugin. Go to the Polylang settings page and add at least one language.

## Usage

Register the translations with the `register_translations` method. They will now be available for translation on the 'Strings translations' page in the WordPress administrator dashboard.

```php
register_translations([
    'general' => [
        'English' => 'The english language',
        'Swedish' => 'The swedish language',
    ],
    'cookie-bar' => [
        'This website uses cookies to ensure you get the best experience on our website.' => 'Cookie bar message',
        'I understand' => 'Cookie bar button text'
    ],
]);
```

Then to fetch and print a translation you can use the `trans` method like you would use regular [gettext __()](https://codex.wordpress.org/Function_Reference/_2).

```php
echo trans('contact-email');
```

## Documentation

Please visit [Polylang's documentation](https://wordpress.org/plugins/polylang) to find out more about translating your post types.

## License

[MIT](LICENSE) © [Vincent Klaiber](https://vinkla.com)
