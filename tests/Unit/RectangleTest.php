<?php

namespace Marius\KiloGeometry\Tests\Unit;

use Mariusbij\KiloGeometry\Shapes\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function test_rectangle_calculations(): void
    {
        $rectangle = new Rectangle(5, 12);

        $this->assertEquals(60, $rectangle->calculateArea());
        $this->assertEquals(34, $rectangle->calculatePerimeter());
    }
}