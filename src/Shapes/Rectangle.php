<?php

namespace Mariusbij\KiloGeometry\Shapes;

use Mariusbij\KiloGeometry\Contracts\ShapeInterface;

class Rectangle implements ShapeInterface
{
    public function __construct(private readonly float $length, private readonly float $width)
    {
    }

    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }

    public function calculatePerimeter(): float
    {
        return ($this->length + $this->width) * 2;
    }
}