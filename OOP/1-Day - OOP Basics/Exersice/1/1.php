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
    public $hairСolor;
    public $gender;
    public $height;

    // public function setName($n)
    // {
    //     $this->name = $n;
    // }

    public function get()
    {
        return $this->name;
    }

    public function __construct($n, $c, $g, $h)
    {
        // $this->setName($n);
        $this->name = $n;
        $this->hairСolor = $c;
        $this->gender = $g;
        $this->height = $h;
    }


    public function __toString()
    {
        return 'This human is ' . $this->name . ' ' . $this->gender . ' with haircolor ' . $this->hairСolor . ' and height ' . $this->height . '.';
    }
}

$firstHuman = new Human('John', 'black', 'male', '190,5');
// print_r($firstHuman);
echo '<br>';
echo $firstHuman;

echo '<br>';
$secondHuman = new Human('Ana', 'yellow', 'femail', '170');
// print_r($secondHuman);
echo '<br>';
echo $secondHuman;
