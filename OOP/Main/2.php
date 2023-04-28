<?php

class Name
{
    public $name;
    public $color;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setColor($color) {
          $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
}

$human = new Name();
$human->setName('my name');
echo $human->getName();
$human->setColor('red');
echo $human->getColor();
echo $human->color;

