<?php
// Define our class
class Car
{
}

// Create an object : Instance of a class
$myCar = new Car();

echo '<pre>';
var_dump($myCar);
echo '</pre>';

// I can create as much objects as I want
$lambo = new Car();
print_r($lambo);
echo '<br>';
// classes have 'internal variables', called 'properties'
// they have also 'internal function', called 'methods'

class Car2
{
    //declare properties
    public $color;
    public $brand;
    public $model;
    // Declare methods
    public function accelerate()
    {
        echo 'Vroooooom!';
    }
}

$lambo2 = new Car2();
print_r($lambo2);
echo '<br>';

$bmw = new Car2();
$bmw->color = 'Yellow';
$bmw->brand = 'BMW';
$bmw->model = 'm3';

echo '<pre>';
var_dump($bmw);
echo '</pre>';

$ferrari = new Car2();
echo '<pre>';
var_dump($ferrari);
echo '</pre>';

echo $bmw->color;

class Car3
{
    //declare properties
    public $color;
    public $brand;
    public $model;
    // constructor
    public function __construct($c, $b, $m)
    {
        // 'this' keyword refers to the object itself
        //'this->color' refers to  property color of the object
        $this->color = $c;
        $this->brand = $b;
        $this->model = $m;
    }
    // declare methods
    public function accelerate()
    {
        echo 'Vrooooooom!';
    }
    // toString function allows to display your object as a string
    public function __toString()
    {
        // need to return a string (the string to be display)
        return 'Car details. Color : ' . $this->color;
    }
}
echo '<br>';

$otherCar = new Car3('Red', 'Ferrari', 'f12');

//Call a method of your object
$otherCar->accelerate();
echo '<br>';
print_r($otherCar);

echo '<br>';
echo '<br>';

// Edit property;
$otherCar->color = 'Blue';
//Display a property
echo $otherCar->color . '<br>';

echo '<pre>';
var_dump($otherCar);
echo '</pre>';

echo $otherCar . '<br>';

class Car4
{
    private $color;
    public $brand;
    public $model;

    //Setter
    public function setColor($c)
    {
        //update the color property
        // I have only three allowed colors: red/green/blue
        if ($c != 'red' && $c != 'green' && $c != 'blue') {
            echo 'Choose a valid color (red/green/blue) <br>';
        } else {
            $this->color = $c;
        }
    }

    // Getter
    public function getColor()
    {
        return $this->color;
    }

    // Constructor
    public function __construct($c, $b, $m)
    {
        $this->setColor($c);
        $this->brand = $b;
        $this->model = $m;
    }
}

// Create an object
$myCar = new Car4('Yellow', 'Bmw', 'm2');


// $myCar->color = 'red';
// This WON'T work : color property is private

// This will work
$myCar->setColor('red');


// echo $myCar->color;
// This WON'T work 

// This will work
echo $myCar->getColor();
echo '<pre>';
var_dump($myCar);
echo '</pre>';

