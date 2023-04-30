<?php

require_once "LivingBeing.php";
require_once "IWorker.php";

class Human extends LivingBeing implements IWorker
{
    public function communicate()
    {
        echo "Hey, my name is $this->name<br>";
    }

    public function work()
    {
        echo "$this->name is currently working.<br>";
    }
}
