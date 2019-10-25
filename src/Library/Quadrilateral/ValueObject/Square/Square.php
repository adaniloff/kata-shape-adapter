<?php

namespace App\Library\Quadrilateral\ValueObject\Square;

use App\Library\Quadrilateral\ValueObject\QuadrilateralInterface;
use App\Library\Quadrilateral\ValueObject\Rectangle\Rectangle;

class Square extends Rectangle
{
    private $l;

    public const NAME = 'square';

    public function __construct(int $l)
    {
        $this->l = $l;
        parent::__construct($l, $l);
    }

    public function setLength(int $l): QuadrilateralInterface
    {
        return $this->setIdenticalLengthWidth($l);
    }

    public function setWidth(int $w): QuadrilateralInterface
    {
        return $this->setIdenticalLengthWidth($w);
    }

    private function setIdenticalLengthWidth(int $l): self
    {
        parent::setLength($l);
        parent::setWidth($l);

        return $this;
    }

    public function __toString()
    {
        return self::NAME;
    }
}
