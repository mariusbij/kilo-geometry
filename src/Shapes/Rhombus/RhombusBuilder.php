<?php

namespace Mariusbij\KiloGeometry\Shapes\Rhombus;

class RhombusBuilder
{
    private Rhombus $rhombus;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->rhombus = new Rhombus();
    }

    public function createWithDiagonals(float $firstDiagonal, float $secondDiagonal): void
    {
        $this->rhombus->setFirstDiagonal($firstDiagonal);

        $this->rhombus->setSecondDiagonal($secondDiagonal);
    }

    public function createWithSideAndHeight(float $side, float $height): void
    {
        $this->rhombus->setSide($side);

        $this->rhombus->setHeight($height);
    }

    public function createWithSideAndAngleDegrees(float $side, float $angleDegrees): void
    {
        $this->rhombus->setSide($side);

        $this->rhombus->setAngleDegrees($angleDegrees);
    }

    public function getRhombus(): Rhombus
    {
        $rhombus = $this->rhombus;

        $this->reset();

        return $rhombus;
    }
}