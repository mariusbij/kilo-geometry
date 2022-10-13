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
        return $this->radius ** 2 * pi();
    }

    public function calculatePerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
}