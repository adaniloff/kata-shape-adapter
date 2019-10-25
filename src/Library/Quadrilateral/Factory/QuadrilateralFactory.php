<?php

namespace App\Library\Quadrilateral\Factory;

use App\Library\Quadrilateral\ValueObject\QuadrilateralInterface;
use App\Library\Quadrilateral\ValueObject\Rectangle\Rectangle;
use App\Library\Quadrilateral\ValueObject\Square\Square;

class QuadrilateralFactory
{
    public static function create(int $w, ?int $h): QuadrilateralInterface
    {
        switch (true) {
            case null !== $w && (null === $h || $h === $w):
                return new Square($w);
            case null !== $w && null !== $h:
                return new Rectangle($w, $h);
            default:
                throw new \InvalidArgumentException();
        }
    }
}
