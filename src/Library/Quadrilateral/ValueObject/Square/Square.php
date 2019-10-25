<?php

namespace App\Library\Quadrilateral\ValueObject\Square;

class Square implements SquareInterface
{
    private $l;

    public const NAME = 'square';

    public function __construct(int $l)
    {
        $this->l = $l;
    }

    public function getLength(): int
    {
        return $this->l;
    }

    public function getWidth(): int
    {
        return $this->l;
    }

    public function __toString()
    {
        return self::NAME;
    }
}
