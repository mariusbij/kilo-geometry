<?php

namespace Marius\KiloGeometry\Tests\Unit;

use Mariusbij\KiloGeometry\Shapes\Rhombus\RhombusBuilder;
use PHPUnit\Framework\TestCase;

class RhombusTest extends TestCase
{
    public function test_rhombus_calculations(): void
    {
        $builder = new RhombusBuilder();

        $builder->createWithDiagonals(6,8);

        $rhombus = $builder->getRhombus();

        $this->assertEquals(24, $rhombus->calculateArea());

        $builder->createWithSideAndHeight(10,7);

        $rhombus = $builder->getRhombus();

        $this->assertEquals(70, $rhombus->calculateArea());

        $builder->createWithSideAndAngleDegrees(2, 33);

        $rhombus = $builder->getRhombus();

        $this->assertEquals(2.18, round($rhombus->calculateArea(), 2));
    }
}