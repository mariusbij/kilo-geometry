<?php

namespace Mariusbij\KiloGeometry;

use Mariusbij\KiloGeometry\Contracts\ShapeInterface;

class Geometry
{
    public function area(ShapeInterface $shape): float
    {
        return $shape->calculateArea();
    }

    public function perimeter(ShapeInterface $shape): float
    {
        return $shape->calculatePerimeter();
    }
}