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
     * @return void
     */
    function pll_translations(array $groups, $multiline = false)
    {
        if (!function_exists('pll_register_string')) {
            if (function_exists('add_action')) {
                add_action('admin_notices', function () {
                    printf('<div class="notice notice-error"><p>Please <a href="%s">activate</a> the Polylang plugin and configure it with at least one <a href="%s">language</a>.</p></div>', admin_url('plugins.php'), admin_url('admin.php?page=mlang'));
                });
            }
        } else {
            foreach ($groups as $group => $translations) {
                foreach ($translations as $key => $description) {
                    pll_register_string($description, $key, $group, $multiline);
                }
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
     * @return string
     */
    function trans(string $key, string $lang = null): string
    {
        if (!function_exists('pll__') || !function_exists('pll_translate_string')) {
            if (function_exists('add_action')) {
                add_action('admin_notices', function () {
                    printf('<div class="notice notice-error"><p>Please <a href="%s">activate</a> the Polylang plugin and configure it with at least one <a href="%s">language</a>.</p></div>', admin_url('plugins.php'), admin_url('admin.php?page=mlang'));
                });
            }
        }

        if (function_exists('pll_translate_string') && $lang) {
            return pll_translate_string($key, $lang);
        }

        if (function_exists('pll__')) {
            return pll__($key);
        }

        if (function_exists('__')) {
            return __($key);
        }

        return $key;
    }
}
