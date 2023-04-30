<?php

class Human extends Adventurer
{
    public function attack($opponent)
    {
        if ($this->equipment == null) {
            $totalAtk = $this->atkPoints + 3;
            $opponent->healthPoints -= $totalAtk;
        } else {
            $opponent->healthPoints -= $this->atkPoints;
        }
    }

    public function usePower()
    {
        if ($this->powerUsed == false) {
            $this->healthPoints += 20;
            $this->powerUsed = true;
            echo 'Power has been used<br>';
        } else
            echo 'Power already used<br>';
    }
}

// For the Humans :
// - A Human attack normally. But when he only has his fists (no weapons), he get a +3 attack bonus.
// - Humans are blessed from god. They use their power to take +20 life points.