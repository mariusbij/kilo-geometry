<?php

namespace Mariusbij\KiloGeometry\Shapes;

use Mariusbij\KiloGeometry\Contracts\ShapeInterface;

class Square implements ShapeInterface
{
    public function __construct(private readonly float $side)
    {
    }

    public function calculateArea(): float
    {
        return pow($this->side, 2);
    }

    public function calculatePerimeter(): float
    {
        return 4 * $this->side;
    }
}