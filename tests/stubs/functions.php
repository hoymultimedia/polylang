<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

if (!function_exists('pll_register_string')) {
    function pll_register_string($description, $key, $group, $multiline)
    {
        //
    }
}

if (!function_exists('pll_translate_string')) {
    function pll_translate_string($key, $lang)
    {
        return 'This is the translation';
    }
}

if (!function_exists('pll__')) {
    function pll__($key)
    {
        return 'This is the translation';
    }
}
