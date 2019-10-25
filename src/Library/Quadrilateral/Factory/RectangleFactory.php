<?php

namespace App\Library\Quadrilateral\Factory;

use App\Library\Quadrilateral\ValueObject\Rectangle\Rectangle;
use App\Library\Quadrilateral\ValueObject\Rectangle\RectangleInterface;
use App\Library\Quadrilateral\ValueObject\Square\Square;

class RectangleFactory
{
    public static function create(int $w, ?int $h): RectangleInterface
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
