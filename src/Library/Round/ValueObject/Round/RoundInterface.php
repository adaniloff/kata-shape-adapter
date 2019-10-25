<?php

namespace App\Library\Round\ValueObject\Round;

interface RoundInterface
{
    public function getWidth(): int;
    public function getLength(): int;
    public function getRadius(): float;
    public function getDiameter(): int;
}
