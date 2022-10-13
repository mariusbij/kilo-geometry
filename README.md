## Kilo Geometry HW Task

# Installation
* clone repo
* `composer install` from project dir

# Info 
 Since there are multiple ways to calculate the area of a Rhombus, use a RhombusBuilder: 
 
 
 1. Create builder `$builder = new RhombusBuilder();`
 
 2. Create a rhombus with one of the following depending of what data you have:
 
 * `$builder->createWithDiagonals($firstDiagonal, $secondDiagonal);`
 
 * `$builder->createWithSideAndHeight($side, $height);`
  
 * `$builder->createWithSideAndAngleDegrees($side, $angleDegrees);`
  
 3. Finally, get Rhombus object that you've created
 
    `$builder->getRhombus();`
    

# Testing
* `composer phpstan`
* `composer phpunit`
* `composer all` to run all scripts


