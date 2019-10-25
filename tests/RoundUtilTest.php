<?php

namespace App\Tests;

use App\Library\Round\RoundUtil;
use App\Library\Round\ValueObject\Round\Round;
use PHPUnit\Framework\TestCase;

class RoundUtilTest extends TestCase
{
    public function testRoundArea()
    {
        $d = 10;

        $round = new Round($d);
        $this->assertEquals(pow($d / 2, 2) * M_PI, RoundUtil::area($round));
    }

    public function testRoundPerimeter()
    {
        $d = 10;

        $round = new Round($d);
        $this->assertEquals($d * M_PI, RoundUtil::perimeter($round));
    }
}
