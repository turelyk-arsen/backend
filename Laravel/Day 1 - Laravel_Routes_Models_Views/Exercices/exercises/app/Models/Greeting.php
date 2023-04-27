<?php

namespace App\Models;

class Greeting {
    public $name;

//     3 In the Greeting model, add a static method called greet(). This method 
// should return a string saying "Hello, [name]! Welcome to Laravel!" 
// Replace [name] with the value of the name attribute.

    public static function greet($name) {
        echo "<p>Hello, $name! Welcome to Laravel!</p>" ;
    }
}