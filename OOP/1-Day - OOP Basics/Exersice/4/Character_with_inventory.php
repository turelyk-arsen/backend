<?php

class Character
{
    public $name;
    public $healthPoints;
    public $atkPoints;
    public $defPoints;
    public $warCry;
    private $type;
    public $inventory;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->set_type($type);
        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
        $this->warCry = 'Attaaack!';
        if ($this->type == 'Orc')
            $this->warCry = "wwouogrouroulou mlll !!";
    }

    public function set_type($type)
    {
        $availableTypes = ['Human', 'Orc', 'Elf'];
        if (in_array($type, $availableTypes))
            $this->type = $type;
        else
            echo 'Wrong type';
    }

    public function add_equipment($equip)
    {
        $this->inventory[] = $equip;
    }

    public function remove_equipment($equip)
    {
        foreach ($this->inventory as $key => $value) {
            if ($equip === $value)
                $this->inventory[$key] = null;
        }
    }

    public function remove_all_equipment()
    {
        $this->inventory = null;
    }

    public function display_equipment()
    {
        echo "Inventory list: <br>";
        foreach ($this->inventory as $key => $equip) {
            echo '<hr>';
            echo $equip;
        }
    }
}
