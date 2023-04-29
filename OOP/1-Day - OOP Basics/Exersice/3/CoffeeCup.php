<?php
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
class CoffeeCup
{
    private $brand;
    public $quantity;
    public $temperature;
    private $volume;

    public function __construct($volume, $t, $brand)
    {
        $this->setBrand($brand);
        $this->quantity = $volume;
        $this->volume = $volume;
        $this->temperature = $t;
    }

    public function setBrand($brand)
    {
        if ($brand == 'Malongo' || $brand == 'Lavazza' || $brand == 'Nescafé') {
            $this->brand = $brand;
        } else {
            echo "Brand must be : Malongo, Lavazza or Nescafe.";
        }
    }
    public function getBrand()
    {
        return $this->brand;
    }
    /*
	Part 2 : 15min

	Create SIP method :
		Accept one integer as parameter which match the quantity we want to drink (in cl).
		When calling this method, remove the quantity we want to drink from the quantity of the mug.
		Display also : 'Remain XX cl of coffee'

		Use Example :
			$myCoffee->sip(3);

*/
    public function sip($wantToDrink)
    {
        if ($this->quantity < $wantToDrink) {
            $this->quantity = 0;
        } else
            $this->quantity -= $wantToDrink;

        return 'Remain ' . $this->quantity . ' cl of coffee';
    }
    /*
	Part 3 : 5 min

	Now we save the max. volume of the mug (cl) in the object.
	You need to add another properties $volume
	We define the volume of the mug when creating the object but can't edit later.

	During the creation of the cup, make the quantity automatically define at the maximum possible (volume of the cup).

	Example :
	$myCoffee = new CoffeeCup('Malongo', 40, 25);  // Mug with 40 cl volume
	$otherCoffee = new CoffeeCup('Lavazza', 50, 15); // Another mug with 50 cl volume

    	Step 6 : 10min
	
	Edit the sip() method to make sure there is enough coffee left in the cup.
	If there is not enough coffee, define the quantity to 0
	Display also a message, example : "You sipe X cl, left Y cl of coffee" 

*/

    public function refill()
    {
        $this->quantity = $this->volume;
    }
    /*
	Part 4 : 10min
	Create the method 'refill'.
	This method should refill quantity of the Mug to it's full capacity.
*/
    public function reHeat($addTemp)
    {
        return 'The temperature of your coffee is ' . $this->temperature + $addTemp . '<br>';
    }
    public function coolDown($remTemp)
    {
        return 'The temperature of your coffee is ' . $this->temperature + $remTemp . '<br>';
    }
    /* 
	Part 5 : 20min
	- Create two methods: reHeat() and coolDown().
		Both of them will accept, as argument, the number of degree to add or remove to the temperature.
		Both of them will display the new temperature of the coffee.

*/

    /* 

	Step 6 : 10min
	
	Edit the sip() method to make sure there is enough coffee left in the cup.
	If there is not enough coffee, define the quantity to 0
	Display also a message, example : "You sipe X cl, left Y cl of coffee" 

	Now we should be able to run this code :

	$myCoffee = new CoffeeCup('Malongo', 50, 65); // 50 cl, brand Malongo, 65 °C

	while($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
	    $quantityToSip = rand(1, 6);
	    $myCoffee->sip($quantityToSip);
	    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
	}

*/
}
