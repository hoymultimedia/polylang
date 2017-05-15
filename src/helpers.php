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

if (!function_exists('pll_translations')) {
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
    function pll_translations(array $groups, $multiline = false)
    {
        if (!function_exists('pll_register_string')) {
            throw new BadFunctionCallException('Please activate the Polylang plugin and configure it with at least one language.');
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
    function trans(string $key, string $lang = null): string
    {
        if (!function_exists('pll__')) {
            throw new BadFunctionCallException('Please activate the Polylang plugin and configure it with at least one language.');
        }

        if ($lang) {
            return pll_translate_string($key, $lang);
        }

        return pll__($key);
    }
}
