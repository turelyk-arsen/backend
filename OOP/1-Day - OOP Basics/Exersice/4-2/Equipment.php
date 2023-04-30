<?php
class Equipment
{
    public $name;
    public $type;
    public $atkBonus;
    public $defBonus;
    public $lifeBonus;

    public function __construct($n, $t, $aB, $dB, $lB)
    {
        $this->name = $n;
        $this->type = $t;
        $this->atkBonus = $aB;
        $this->defBonus = $dB;
        $this->lifeBonus = $lB;
    }
    public function __toString()
    {
        return "The equipment has $this->name <br>
    and this is a type of $this->type .<br>
    There are $this->atkBonus, $this->defBonus, $this->lifeBonus.";
    }
}


	// Each equipment is designated by a name.
	// Equipment also gives a special bonus.

	// For example: an armor can give +5 in defense, a +3 sword in attack.
	// There is even some object that gives +10 in attack but decreases defense.

	// Create an Equipment class.
	// This class will implement all the attributes and methods common to the devices.
	// Set up different equipments. You must be able to create multiple equipments.
	// (I leave you free to your imagination for the creation of weapon and specific power ....)
	// For example :
	// $sword = new equipment("Death Sword", "Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
	// $jewel = new equipment("Grace Necklace", "Jewelry", 0, 0, 5); // 0 atk bonus, 0 def bonus, 5 life bonus;
	// $bestshield = new equipment("BDG", "Shield", 0, 10, 0); // 0 atk bonus, 10 def bonus, 0 life bonus;