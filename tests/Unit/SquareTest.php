<?php

namespace Marius\KiloGeometry\Tests\Unit;

use Mariusbij\KiloGeometry\Shapes\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    public function test_square_calculations(): void
    {
        $square = new Square(5);

        $this->assertEquals(25, $square->calculateArea());
        $this->assertEquals(20, $square->calculatePerimeter());
    }
}