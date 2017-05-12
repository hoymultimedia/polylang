# Polylang

A [Polylang](https://wordpress.org/plugins/polylang) helper for [WordPlate](https://wordplate.github.io).

[![Build Status](https://img.shields.io/travis/wordplate/polylang/master.svg?style=flat)](https://travis-ci.org/wordplate/polylang)
[![StyleCI](https://styleci.io/repos/58547586/shield?style=flat)](https://styleci.io/repos/58547586)
[![Coverage Status](https://img.shields.io/codecov/c/github/wordplate/polylang.svg?style=flat)](https://codecov.io/github/wordplate/polylang)
[![Latest Version](https://img.shields.io/github/release/wordplate/polylang.svg?style=flat)](https://github.com/wordplate/polylang/releases)
[![License](https://img.shields.io/packagist/l/wordplate/polylang.svg?style=flat)](https://packagist.org/packages/wordplate/polylang)

## Installation

Require this package, with [Composer](https://getcomposer.org), in the root directory of your project.

```bash
$ composer require wordplate/polylang
```

Login to the WordPress administrator dashboard and activate the [Polylang](https://wordpress.org/plugins/polylang) plugin. Go to the Polylang settings page and add at least one language.

## Usage

Register the translations with the `pll_translations` function. They will now be available for translation on the 'Strings translations' page in the WordPress administrator dashboard.

```php
pll_translations([
    'group' => [
        'String that should be translatable by Polylang' => 'Explanation of how the string is used',
    ]
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

Then to fetch and print a translation you can use the `trans` function like you would use regular [__()](https://developer.wordpress.org/reference/functions/__) function.

```php
echo trans('I understand');
```

## Documentation

Please visit [Polylang's documentation](https://wordpress.org/plugins/polylang) to find out more about translating your post types.

## License

[MIT](LICENSE) © [Vincent Klaiber](https://vinkla.com)
