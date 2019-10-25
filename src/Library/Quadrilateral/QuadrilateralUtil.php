<?php

namespace App\Library\Quadrilateral;

use App\Library\Quadrilateral\ValueObject\QuadrilateralInterface;

class QuadrilateralUtil
{
    public static function area(QuadrilateralInterface $quadrilateral): float
    {
        return $quadrilateral->getLength() * $quadrilateral->getWidth();
    }

    public static function perimeter(QuadrilateralInterface $quadrilateral): float
    {
        return $quadrilateral->getLength() * 2 + $quadrilateral->getWidth() * 2;
    }
}
