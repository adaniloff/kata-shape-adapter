<?php

namespace App\Tests;

use App\Library\Quadrilateral\QuadrilateralUtil;
use App\Library\Quadrilateral\ValueObject\Rectangle\Rectangle;
use App\Library\Quadrilateral\ValueObject\Square\Square;
use PHPUnit\Framework\TestCase;

class QuadrilateralUtilTest extends TestCase
{
    public function testRectangleArea()
    {
        $l = 10;
        $w = 15;

        $rectangle = new Rectangle($l, $w);
        $this->assertEquals($l * $w, QuadrilateralUtil::area($rectangle));
    }

    public function testRectanglePerimeter()
    {
        $l = 10;
        $w = 15;

        $rectangle = new Rectangle($l, $w);
        $this->assertEquals($l * 2 + $w * 2, QuadrilateralUtil::perimeter($rectangle));
    }

    public function testSquareArea()
    {
        $l = 10;

        $square = new Square($l);
        $this->assertEquals(pow($l, 2), QuadrilateralUtil::area($square));
    }

    public function testSquarePerimeter()
    {
        $l = 10;

        $square = new Square($l);
        $this->assertEquals($l * 4, QuadrilateralUtil::perimeter($square));
    }
}
