<?php

namespace App\Adapter;

use App\Library\Quadrilateral\ValueObject\QuadrilateralInterface;
use App\Library\Round\ValueObject\Round\RoundInterface;

class RoundAdapter implements RoundInterface
{
    private $quadrilateral;

    public function __construct(QuadrilateralInterface $quadrilateral)
    {
        $this->quadrilateral = $quadrilateral;
    }

    public function getRadius(): float
    {
        return $this->quadrilateral->getWidth() / 2;
    }

    public function getDiameter(): int
    {
        return $this->quadrilateral->getWidth();
    }

    public function getWidth(): int
    {
        return $this->quadrilateral->getWidth();
    }

    public function getLength(): int
    {
        return $this->quadrilateral->getLength();
    }
}
