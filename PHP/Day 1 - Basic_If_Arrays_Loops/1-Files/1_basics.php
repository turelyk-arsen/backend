<?php
// This is a single line comment
/*
this is 
a multiline
comment
*/
// 1.Simple Variables
$firstName = 'Simon';
$age = 31;
$height = 1.80;
$are_you_doing_well = false;
/*Rules:
-name of the variable must start with a letter
-name can contain numbers
-only underscore, on other symbols ! 
*/

// echo 'Hello world';

echo $firstName;
echo '<br>';
echo $age;
echo '</br>';

echo "<h1>$firstName</h1>";
echo '<h1>$firstName</h1>';

// Display type of the variable
echo gettype($are_you_doing_well);
echo '<br>';
// Display content & type
var_dump($are_you_doing_well);
echo '<br>';
var_dump($firstName);
echo '<br>';

//2. Arithmetic operators
$a = 5 + 2;
$a = 5 - 2;
$a = 5 / 2;
$a = 5 * 2;
$a = 5 % 2; // modulo : whats left on the division

// incrementing
$a = 10;
$a = $a + 2;
$a += 2;

// increment by one
$a += 1;
$a++;

// decrement
$a = 10;
$a = $a - 2;
$a -= 2;

// decrement by one
$a -= 1;
$a--;

// 3. concatenation: put two or more string together
echo "<br>";
echo "Hello $firstName, Welcome to my website <br>";
echo 'Hello '.$firstName.', Welcome to my website';
?>