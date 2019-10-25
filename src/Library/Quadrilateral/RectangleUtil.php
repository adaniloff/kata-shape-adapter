<?php

namespace App\Library\Quadrilateral;

use App\Library\Quadrilateral\ValueObject\Rectangle\RectangleInterface;

class RectangleUtil
{
    public static function area(RectangleInterface $quadrilateral): float
    {
        return $quadrilateral->getLength() * $quadrilateral->getWidth();
    }

    public static function perimeter(RectangleInterface $quadrilateral): float
    {
        return $quadrilateral->getLength() * 2 + $quadrilateral->getWidth() * 2;
    }
}
