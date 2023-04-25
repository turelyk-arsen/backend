<?php
abstract class Shape
{
    public $x;
    public $y;

    // Signature of the method : no body
    abstract function calculateSurface();

    public function get_x()
    {
        return $this->x;
    }

    public function example()
    {
        echo ' We are going doing the save thing';
    }
}

// This will not work because the class Share is abstract
// $myShape = new Shape();

class Circle extends Shape
{
    public $diameter;

    public function calculateSurface()
    {
        echo "Calculation for the circle <br>";
    }
}

class Rectangle extends Shape
{
    public function calculateSurface()
    {
        echo "Calculation for the rectangle <br>";
    }
}

$myRectangle = new Rectangle();
$myRectangle->example();

$myCircle = new Circle();
$myCircle->example();
$myCircle->calculateSurface();

var_dump($myRectangle);