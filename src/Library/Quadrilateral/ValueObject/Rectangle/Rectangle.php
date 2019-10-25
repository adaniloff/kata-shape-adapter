<?php

namespace App\Library\Quadrilateral\ValueObject\Rectangle;

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
