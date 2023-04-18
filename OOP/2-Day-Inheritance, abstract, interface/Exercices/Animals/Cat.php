<?php

require_once "Animal.php";

class Cat extends Animal
{
    public function talk()
    {
        echo "Meow !<br>";
    }
}
