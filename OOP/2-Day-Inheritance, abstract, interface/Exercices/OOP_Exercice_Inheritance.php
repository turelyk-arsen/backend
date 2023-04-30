<?php

class Animals
{
	public $legs;
	public $color;
	public $gender;
	public $name;

	public function __construct($legs, $color, $gender, $name)
	{
		$this->legs = $legs;
		$this->color = $color;
		$this->gender = $gender;
		$this->name = $name;
	}
}

class Dogs extends Animals
{
	public $bark;

	public function __construct($legs, $color, $gender, $name, $bark)
	{
		parent::__construct($legs, $color, $gender, $name);
		$this->bark = $bark;
	}

	public function getBark() {
		return "My dog $this->name is able to $this->bark.";
	}
}

class Cats extends Animals {
	public $meow;

	public function __construct($legs, $color, $gender, $name, $meow) {
		parent::__construct($legs, $color, $gender, $name);
		$this->meow = $meow;
	}

	public function getMeow() {
		return "A cat is able to meow.";
	}
}

$myDog = new Dogs('4', 'grey', 'male', '123', '123');
print_r($myDog);
echo $myDog->getBark();

//
// - Part 1 : 
// An animal is represented by a number of legs, a color, a gender and a name.
// A dog is able to bark.
// A cat is able to meow.

// 	-> Create the matching classes

// - Part 2 :

class Human {
	public $name;
	public $color;
	public $gender;

	public function __construct($name, $color, $gender) {
		$this->name = $name;
		$this->color = $color;
		$this->gender = $gender;
	}

	public function work() {
		echo 'I can work!';
	}

	public function talk() {
		echo 'I can talk!';
	}
}

class Robot {
	public $color;
	public $identigier;

	public function __construct($color, $identigier) {
		$this->color = $color;
		$this->identigier = $identigier;
	}

	public function work() {
		echo 'I can work!';
	}

}
// A human being is a magical creature that does not belong to the animal 
//kingdom but is represented by a name, a hair color and a gender.

// A robot is a mechanical creature that is defined by an identifier and a color.

// 	-> Create the matching classes

// - Part 3 :

// Human and robot can work, create a 'work()' method (just display some stuff).

// - Part 4 : 

// Human can talk.

// 	-> Change your code to match

?>