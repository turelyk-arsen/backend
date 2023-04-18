<?php

require_once "Animal.php";

class Dog extends Animal
{
    public function talk()
    {
        echo "Woof !<br>";
    }
}
