<?php

namespace Mariusbij\KiloGeometry\Shapes;

use Mariusbij\KiloGeometry\Contracts\ShapeInterface;

class Circle implements ShapeInterface
{
    public function __construct(private readonly float $radius)
    {
    }

    public function calculateArea(): float
    {
        return round($this->radius ** 2 * pi(), 2);
    }

    public function calculatePerimeter(): float
    {
        return round(2 * pi() * $this->radius, 2);
    }
}