<?php

namespace App\Library\Round;

use App\Library\Round\ValueObject\Round\RoundInterface;

class RoundUtil
{
    public static function area(RoundInterface $round)
    {
        return pow($round->getRadius(), 2) * M_PI;
    }

    public static function perimeter(RoundInterface $round)
    {
        return $round->getDiameter() * M_PI;
    }
}
