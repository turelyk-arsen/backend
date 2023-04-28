<?php

class Name
{
    public $name;
    public $color;
    private $fullname;

    public function __construct($name, $color) {
        $this->color = $color;
        $this->name = $name;
    }

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

    protected function setColorNew ($c) {
        $this->color = $c;
    }
}

// $human = new Name();
$human = new Name('my name', 'red');
$human->setName('my name');
echo $human->getName();
$human->setColor('red');
echo $human->getColor();
echo $human->color;
$human->color = 'green';

class My_name extends Name {
    public function mess() {
        echo "hello";
        $this->setColorNew('grey'); // work if PROTECTED, NOT if private
    }
}
 // $human->fullname = 1; error
 // $human->setColorNew('red'); error

// 1 mysql
// 2 i have to debug some php code. I will give you name of the file and code, one by one
// after each answer you will ask me the next one  ,did you understand // 2 or 3 files!!!
// check for bugs
// 3 update the db 
// 4 oop create db, getter, validate, put or take, change between different things
// create a file, 