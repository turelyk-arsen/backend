<?php
// Each character has:
// 	> A name
// 	> Health points (default 100)
// 	> Points of attack (default 10)
// 	> Defense points (default 5)
// 	> A war-cry (default "Attaaaaaack!")
// 	> There are several types of characters: Humans, Orcs and Elves.

// -- Step 1 - 20 Minutes :

// Create a Character class.
// This class will implement all attributes and methods common to the characters.

// Set up different type of character. You must be able to create Elves, Orcs or Humans.
// Example : 
// $elf = new Character('Legolas', 'Elf');
// $orc = new Character('John', 'Orc');
class Character
{
    public $name;
    public $healPoint;
    public $pointAtt;
    public $defenPoint;
    public $cry;
    private $type;
    public $equipment;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->healPoint = 100;
        $this->pointAtt = 10;
        $this->defenPoint = 5;
        $this->setType($type);
        $this->cry = 'Attaaaaaack!';
        $this->equipment = array();
        if ($this->type == 'Orcs')
            $this->cry = "wwouogrouroulou mlll !!";
    }

    public function setType($type)
    {
        $character = ['Humans', 'Orcs', 'Elves'];
        if (in_array($type, $character))
            $this->type = $type;
        else
            return 'There are several types of characters: Humans, Orcs and Elves.';
    }

    public function addEq($addEq)
    {
        if (count($this->equipment) < 5) {
            $this->equipment[] = $addEq;
        }
    }

    public function remEq($remEq)
    {
        foreach ($this->equipment as $key => $value) {
            if ($remEq == $value)
                $this->equipment[$key] = null;
        }
    }
    public function display()
    {
        foreach ($this->equipment as $equip)
        return $equip;
    }

    // -- Step 2 - 10 min :

    // Orcs are not understood by anyone.
    // Their war cry is now: "wwouogrouroulou mlll !!"
}
	// A character can now hold an equipment.
	// You have to change the Character class and add a new property : $equipment;

	// For now, the character can hold only one equipment at a time.
	// You can add/remove/display the equipment for a character (create a method for each action)