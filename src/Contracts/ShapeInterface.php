<?php

namespace Mariusbij\KiloGeometry\Contracts;

interface ShapeInterface
{

    /**
     * Calculate the area of the shape
     * @return float
     */
    public function calculateArea(): float;


    /**
     * Calculate the perimeter of the shape
     * @return float
     */
    public function calculatePerimeter(): float;
}