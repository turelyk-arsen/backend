
<?php

class Equipment
{
    public $name;
    public $type;
    public $bonusHealth;
    public $bonusAtk;
    public $bonusDef;

    public function __construct($n, $t, $bH, $bA, $bD)
    {
        $this->name = $n;
        $this->type = $t;
        $this->bonusHealth = $bH;
        $this->bonusAtk = $bA;
        $this->bonusDef = $bD;
    }

    public function __toString()
    {
        return "-- Equipment information --<br>
        Name : $this->name<br>
        Type : $this->type<br>
        Bonus Health : $this->bonusHealth<br>
        Bonus Attak : $this->bonusAtk<br>
        Bonus Defense : $this->bonusDef<br>";
    }
}