<?php

namespace App\Library\Quadrilateral\ValueObject\Rectangle;

use App\Library\Quadrilateral\ValueObject\QuadrilateralInterface;

class Rectangle implements RectangleInterface
{
    private $l;
    private $w;

    public const NAME = 'rectangle';

    public function __construct(int $l, int $w)
    {
        $this->l = $l;
        $this->w = $w;
    }

    public function setLength(int $l): QuadrilateralInterface
    {
        $this->l = $l;

        return $this;
    }

    public function setWidth(int $w): QuadrilateralInterface
    {
        $this->w = $w;

        return $this;
    }

    public function getLength(): int
    {
        return $this->l;
    }

    public function getWidth(): int
    {
        return $this->w;
    }

    public function __toString()
    {
        return self::NAME;
    }
}
