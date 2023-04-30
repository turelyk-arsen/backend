<?php

abstract class Adventurer
{
    public $name;
    public $healthPoints;
    public $atkPoints;
    public $defPoints;
    public $warCry;
    public $equipment;
    public $powerUsed;

    public function __construct($n)
    {
        $this->name = $n;
        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
        $this->warCry = "Attaaaaaack!";
        $this->powerUsed = false;
    }

    abstract public function attack($opponent);
    abstract public function usePower();

    public function add_equipment($equipment)
    {
        $this->equipment = $equipment;
    }

    public function remove_equipment()
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo "Inventory list : <br>";
        echo $this->equipment;
    }
}
