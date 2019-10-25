<?php

namespace App\Library\Quadrilateral\ValueObject;

interface QuadrilateralInterface
{
    public function getLength(): int;
    public function getWidth(): int;
}
