<?php

namespace App\Library\Round\ValueObject\Round;

class Round implements RoundInterface
{
    private $d;

    public const NAME = 'round';

    public function __construct(int $d)
    {
        $this->d = $d;
    }

    public function getLength(): int
    {
        return $this->d;
    }

    public function getWidth(): int
    {
        return $this->d;
    }

    public function getRadius(): float
    {
        return $this->d / 2;
    }

    public function getDiameter(): int
    {
        return $this->d;
    }

    public function __toString()
    {
        return self::NAME;
    }
}
