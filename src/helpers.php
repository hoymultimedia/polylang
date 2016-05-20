<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('register_translations')) {
    /**
     * Register translations.
     *
     * @param array $groups
     * @param bool $multiline
     *
     * @throws \BadFunctionCallException
     *
     * @return void
     */
    function register_translations(array $groups, $multiline = false)
    {
        if (!function_exists('pll_register_string')) {
            throw new BadFunctionCallException('Please active the Polylang plugin.');
        }

        foreach ($groups as $group => $translations) {
            foreach ($translations as $key => $description) {
                pll_register_string($description, $key, $group, $multiline);
            }
        }
    }
}

if (!function_exists('trans')) {
    /**
     * Get translations by their strings.
     *
     * @param string $key
     * @param string|null $lang
     *
     * @throws \BadFunctionCallException
     *
     * @return string
     */
    function trans($key, $lang = null)
    {
        if (!function_exists('pll__')) {
            throw new BadFunctionCallException('Please active the Polylang plugin.');
        }

        if ($lang) {
            return pll_translate_string($key, $lang);
        }

        return pll__($key);
    }
}
