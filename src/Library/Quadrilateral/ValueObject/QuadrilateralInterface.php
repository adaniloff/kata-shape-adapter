<?php

namespace App\Library\Quadrilateral\ValueObject;

interface QuadrilateralInterface
{
    public function setLength(int $l): self;
    public function setWidth(int $w): self;
    public function getLength(): int;
    public function getWidth(): int;
}
