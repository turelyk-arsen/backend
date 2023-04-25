<?php

class Vehicle
{
    // Properties children can access
    protected $manufactured;
    public $color;

    public function __construct($m, $c)
    {
        $this->manufactured = $m;
        $this->color = $c;
    }

    public function horn()
    {
        echo 'Tuut tuut <br>';
    }

    public function getManufacturer()
    {
        return $this->manufactured;
    }
}

// Car inherits from Vehicle
class Car extends Vehicle
{
    private $nbDoors;

    public function __construct($m, $c, $d)
    {
        parent::__construct($m, $c);
        $this->nbDoors = $d;
    }

    public function slam_the_door()
    {
        echo "Bam <br>";
    }
}

class Truck extends Vehicle
{
    private $loadCapacity;

    public function __construct($m, $c, $load)
    {
        parent::__construct($m, $c);
        $this->loadCapacity = $load;
    }
}

$myVehicle = new Vehicle('Audi', 'grey');
$myCar = new Car('BMW', 'blue', 5);
$myCar->horn();
$myCar->slam_the_door();
echo $myVehicle->color;

// echo $myCar->manufactured; PROTECTED to access you should make SETTER/GETTER
// then we add new method getManufacturer()

echo '<br>';
echo $myCar->getManufacturer();

$myTruck = new Truck('Volvo', 'White/Red', 25);
echo '<pre>';
var_dump($myTruck);
echo '</pre>';
