<?php

require_once "LivingBeing.php";
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Human.php';
require_once 'IWorker.php';


$human = new Human('John', 'grey', 'male');
$dog = new Dog('Gav', 'black', 'female', 4);
$cat = new Cat('Mav', 'white', 'female', 4);

$myArray = [$human, $dog, $cat];

foreach ($myArray as $key => $value) {
    $value->communicate();
}


