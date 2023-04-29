<?php

/*
A Human is represented by a name, a haircolor, a gender and a height.
Create the matching class.
Use the constructor to initialize your property quickly.
The name should not be editable after the creation of the object.
Create two different object from this class.
Display the two objects using toString().
*/

class Human
{
    private $name;
    public $color;
    public $gender;
    public $height;

    public function __construct($n, $c, $g, $h)
    {
        $this->name = $n;
    }
    public function __toString()
    {
        return $this->name;
    }
}

$asdf = new Human('vasa', 'red', 'male', 180);
echo $asdf;
