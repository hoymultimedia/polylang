<?php

/*
 * This file is part of Polylang.
 *
 * (c) Hoy Multimedia AB <info@hoy.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace WordPlate\Tests\Polylang;

use PHPUnit\Framework\TestCase;

/**
 * This is the helpers test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class HelpersTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testPllTranslations()
    {
        require __DIR__.'/stubs/functions.php';

        $this->assertNull(pll_translations([
            'general' => ['translation' => 'This is the translation'],
        ]));
    }

    /**
     * @runInSeparateProcess
     */
    public function testTrans()
    {
        require __DIR__.'/stubs/functions.php';

        $this->assertSame('This is the translation', trans('translation'));
        $this->assertSame('This is the translation', trans('translation', 'en'));
    }
}
