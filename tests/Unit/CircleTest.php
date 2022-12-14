<?php

namespace Marius\KiloGeometry\Tests\Unit;

use Mariusbij\KiloGeometry\Shapes\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function test_circle_calculations(): void {

        $circle = new Circle(24);

        $this->assertEquals(1809.56, round($circle->calculateArea(), 2));
        $this->assertEquals(150.8, round($circle->calculatePerimeter(), 2));
    }
}