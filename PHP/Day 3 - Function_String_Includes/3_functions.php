<?php
//Functions are block of code that you can reuse anytime you want.
//Function are either preform a specific action OR return a result.

//Declare a function
function hello_world()
{
    //code to be executed when you call the function
    echo 'Hello, WORLD!<br>';
}
//Call the function
hello_world();
hello_world();
hello_world();

//Function with return value
function hello()
{
    return 'hello <br>';

    // Never going to be executed
    echo 'yoyoyoyoyoy';
}
//display the result
echo hello();

//Save the result in a variable
$result = hello();
echo $result;

//Function with arguments
function login($email, $password)
{
    echo "Try to login with your email by using this password: $email /$password <br>";
}
login('simon@thefrench.com', '1234');
login('garbiel@leme.fr', '0000');

//Scope : visibility of your variables
// $number = 10;
// function example()
// {
//     this doesn't work
//     echo $number;
// }
// example();

// function example2()
// {
//     $number2 = 15;
// }
// example2();
// echo $number2;


// Let's get back to arguments
function greeting($firstName) {
    echo 'Hello, welcome to my website '.$firstName.'<br>';
}
greeting('Simon');
$firstName = 'Paulo';
greeting($firstName);
// echo $firstName;

//Default Value for argument
function multiplyByTwo ($x = 1) {
    return $x * 2;
}
echo multiplyByTwo(5).'<br>';
echo multiplyByTwo(7).'<br>';
echo multiplyByTwo().'<br>'; //1 * 2    
