<?php

namespace Mariusbij\KiloGeometry\Shapes\Rhombus;

use Mariusbij\KiloGeometry\Contracts\ShapeInterface;

class Rhombus implements ShapeInterface
{
    private float $side;

    private float $angleDegrees;

    private float $height;

    private float $firstDiagonal;

    private float $secondDiagonal;

    public function calculateArea(): float
    {
        if (isset($this->firstDiagonal) && isset($this->secondDiagonal)) {

            return $this->firstDiagonal * $this->secondDiagonal / 2;

        } elseif (isset($this->side) && isset($this->height)) {

            return $this->side * $this->height;

        } elseif (isset($this->side) && isset($this->angleDegrees)) {

            return $this->side ** 2 * sin(deg2rad($this->angleDegrees));

        } else {

            throw new \InvalidArgumentException('Invalid arguments given for rhombus area calculation');
        }
    }

    public function calculatePerimeter(): float
    {
        if (!isset($this->side)) {

            if (isset($this->firstDiagonal) && isset($this->secondDiagonal)) {

                $this->side = sqrt(($this->firstDiagonal ** 2 + $this->secondDiagonal ** 2)) / 2;

            } else {

                throw new \InvalidArgumentException('Invalid arguments given for rhombus perimeter calculation');
            }
        }

        return $this->side * 4;
    }

    public function setSide(?float $side): void
    {
        $this->side = $side;
    }

    public function setHeight(?float $height): void
    {
        $this->height = $height;
    }

    public function setAngleDegrees(?float $angleDegrees): void
    {
        $this->angleDegrees = $angleDegrees;
    }

    public function setFirstDiagonal(?float $firstDiagonal): void
    {
        $this->firstDiagonal = $firstDiagonal;
    }

    public function setSecondDiagonal(?float $secondDiagonal): void
    {
        $this->secondDiagonal = $secondDiagonal;
    }
}

