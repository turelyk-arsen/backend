<?php

/*
You work for a local animal shelter. You must redesign their website.
You have to create a class named Cat() with the following properties:
	- Name (string - 3 to 20 characters)
	- Age (int)
	- Color (string - 3 to 10 characters)
	- Sex (string - male or female)
	- Breed (string - 3 to 20 characters)
1. Make the getters/setters to validate the above data type. You also have to create the class
constructor in order to instantiate the class.
2. Add a getInfos() method to return all the properties as an array.
3. In a new file, instantiate the class to display 3 different cats and display the result with the
getInfos() method previously created.
*/
require_once 'index.php';

class Cat
{
    private $name;
    private $age;
    private $color;
    private $sex;
    private $breed;

    public function __construct($n, $a, $c, $s, $b)
    {
        $this->set_name($n);
        $this->set_age($a);
        $this->set_color($c);
        $this->set_sex($s);
        $this->set_breed($b);
    }

    public function set_name($newName) {
        if (is_string($newName) && (strlen($newName)>2 && strlen($newName) <21)) {
            $this->name = $newName;
        } else {
            echo "Name should be a string - 3 to 20 characters <br>";
        }
    }

    public function get_name () {
        return $this->name;
    }

    public function get_age() {
        return $this->age;
    }

    public function set_age ($newAge) {
        if (is_numeric($newAge)) {
            $this->age = $newAge;
        } else 
        {
            echo 'Age should be a number <br>';
        }
    }

    public function get_color () {
        return $this->color;
    }

    public function set_color($newColor) {
        if (strlen($newColor)>2 && strlen($newColor)<11 && is_string($newColor)) {
            $this->color = $newColor;
        } else {
            echo "Color should be a string - 3 to 10 characters <br>";
        }
    }

    public function get_sex () {
        return $this->sex;
    }

    public function get_breed () {
        return $this->breed;
    }

    public function set_breed ($newBreed) {
        if (strlen($newBreed) < 21 && is_string($newBreed) && strlen($newBreed) >2) {
            $this->breed = $newBreed;
        } else {
            echo "Breed should be a string -3 to 20 characters <br>";
        }
    }

    public function set_sex($newSex) {
        if ($newSex == 'male' || $newSex == 'femail') {
        $this->sex = $newSex;
        } else {
            echo "Gender should be 'male' or 'female' <br>";
        }
    }


    public function getInfos()
    {
        $properties =  array(
            $this->get_name(),
            $this->get_age(),
            $this->get_color(),
            $this->get_sex(),
            $this->get_breed(),
        );
        return $properties;
    }

    public function __toString()
    {
        return "The name of my cat is $this->name. It is $this->age years old. My cat is a $this->color $this->sex. The breed is $this->breed.; <br>";
    }
}

// foreach(getInfos() as $value) {
// 	echo $value . '<br>';
// }
