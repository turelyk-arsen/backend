<?php
class CoffeeCup
{
    private $brand;
    public $quantity;
    public $temperature;
    public $wantToDrink;
    private $volume;

    public function __construct($brand, $q, $t, $v)
    {
        $this->setBrand($brand);
        $this->quantity = $q;
        $this->temperature = $t;
        $this->volume = $v;
    }

    public function setBrand($brand)
    {
        if ($brand != 'Malongo' && $brand != 'Lavazza' && $brand != 'Nescafe') {
            echo 'Choose another brand (Malongo/Lavazza/Nescafe) <br>';
        } else {
            $this->brand = $brand;
        }
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function sip($wantToDrink)
    {
        $remain = $this->quantity - $wantToDrink;
        echo 'Remain ' . $remain . ' cl of coffee'.'<br>';
        if ($remain < 30) {

            echo "You sipe $wantToDrink cl, left $remain cl of coffee. <br>";
        }
    }

    public function refill()
    {
        $this->quantity = $this->volume;
    }

    public function reHeat($newDeg)
    {
        $this->temperature += $newDeg;
        echo "(HOT) New temperature is $this->temperature <br>";
    }
    public function coolDown($Deg)
    {
        $this->temperature -= $Deg;
        echo "(COLD) New temperature is $this->temperature <br>";
    }
}


/*
	Part 1 :

	Create a class 'CoffeeCup' with these properties :
		- brand (brand of coffee)
		- quantity (cl)
		- temperature

	All properties are public except for 'brand'.
	We only accept 3 brands : Malongo, Lavazza or Nescafé.

	Create constructor, getter and setter for this class.

	Use example :

	$myCoffee = new CoffeeCup('Malongo', 30, 25);
	$myCoffee->quantity = 30;
	$myCoffee->temperature = 25;
*/