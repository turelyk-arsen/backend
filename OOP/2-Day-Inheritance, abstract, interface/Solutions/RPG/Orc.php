<?php

require_once 'Adventurer.php';

class Orc extends Adventurer
{

    public function attack($opponent)
    {
        // Check if opponent is an ELF ?
        if (get_class($opponent) == 'Elf') {
            if ($opponent->equipment != null && $opponent->equipment->type != 'Shield') {
                $opponent->healthPoints -= 50;
            }
        } else
            $opponent->healthPoints -= $this->atkPoints;
    }

    public function usePower()
    {
        if ($this->powerUsed == false) {
            $this->defPoints += 20;
            $this->atkPoints -= 10;
            $this->powerUsed = true;
            echo 'Power has been used<br>';
        } else
            echo 'Power already used<br>';
    }
    // public function __construct($n)
    // {
    //     parent::__construct($n);
    //     $this->warCry = "wwouogrouroulou mlll !!";
    // }

    // public function attack($opponent)
    // {
    //     if ($opponent->n == 'Elf' && $opponent->equipment != 'shield')
    //         $opponent->healthPoints -= 50;

    //     $opponent->atkPoints -= 10;
    // }

    // public function usePower()
    // {
    //     $this->defPoints += 20;
    //     $this->atkPoints -= 10;
    // }
    // - They attack with rage. If they attack an elf, which has no shield, Elf loose 50 life points.
    // - Orc can use his power to become almost invincible. +20 defense points but -10 attack.
}
