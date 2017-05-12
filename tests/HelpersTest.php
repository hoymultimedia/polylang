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
     * @expectedException \BadFunctionCallException
     */
    public function testPllTranslations()
    {
        pll_translations([]);
    }

    /**
     * @expectedException \BadFunctionCallException
     */
    public function testTrans()
    {
        trans('message');
    }
}
