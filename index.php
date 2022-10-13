<?php

require 'vendor/autoload.php';

use Mariusbij\KiloGeometry\Geometry;
use Mariusbij\KiloGeometry\Shapes\Circle;
use Mariusbij\KiloGeometry\Shapes\Rhombus\RhombusBuilder;

$geometry = new Geometry();

$circle = new Circle(24);

echo $geometry->area($circle);
echo PHP_EOL;
echo $geometry->perimeter($circle);
echo PHP_EOL;

$rhombusBuilder = new RhombusBuilder();

$rhombusBuilder->createWithSideAndHeight(10,7);

$rhombus = $rhombusBuilder->getRhombus();

echo $geometry->area($rhombus);
echo PHP_EOL;
echo $geometry->perimeter($rhombus);
echo PHP_EOL;

$rhombusBuilder->createWithDiagonals(6, 8);

$rhombus2 = $rhombusBuilder->getRhombus();

echo $geometry->area($rhombus2);
echo PHP_EOL;
echo $geometry->perimeter($rhombus2);
echo PHP_EOL;


