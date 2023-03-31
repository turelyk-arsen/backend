<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    "The first number is higher" (if the first number is higher than the second number)
    "The first number is smaller" (if the first number is smaller than the second number)
    "The two numbers are identical" (if the two numbers are equal)

*/
function numbers($firstNum, $secondNum)
{
	if ($firstNum > $secondNum) {
		echo "The first number is higher";
	} else if ($firstNum < $secondNum) {
		echo "The first number is smaller";
	} else {
		echo "The two numbers are identical";
	}
}
numbers(50, 6);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*

-- Exercice 2
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/
function htmlImages($src)
{
	echo "<img src='$src'";
}
htmlImages('https://picsum.photos/200');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket: 
							- Salad = 1.03
							- Tomato = 2.3
							- Oignon = 1.85
							- Red cabbage = 0.85
	    - Calculates the sum of Michel's expenses 
	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise.
	    - Calculates the sum of Michel's expenses (already done)
	3.2
	Write a function that will:
	- Take an array as input
	- Calculate the sum of the expenses of the array
	- return the sum

*/
$list = [
	'Salad' => 1.03,
	'Tomato' => 2.3,
	'Oignon' => 1.85,
	'Red cabbage' => 0.85
];
function sum($list)
{
	$sum = 0;
	foreach ($list as $value) {
		$sum += $value;
	}
	return $sum;
}

echo sum($list);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

function multiplication($num1 = 1, $num2 = 1)
{

	return $num1 * $num2 . '<br>';
}
echo multiplication(10, 2);
echo multiplication(4);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether 
read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/
function palindrom($string_check)
{
	$string_check_reverse = strrev($string_check);

	if ($string_check == $string_check_reverse)
		echo 'Your string is a palindrome.' . '<br>';
	else
		echo 'Your string is NOT a palindrome.' . '<br>';
}

palindrom('poop');
palindrom('poosdfgp');

function isPalindrom($string)
{
	$lenght = strlen($string) - 1;
	for ($i = 0; $i <= $lenght / 2; $i++) {
		if ($string[$i] != $string[$lenght - $i]) {
			return false;
		}
	}
	return true;
}
echo isPalindrom('madam');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercice 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

function checkNumber($your_number)
{
	for ($i = 2; $i < $your_number; $i++) {
		if ($your_number % $i == 0) {
			return 'NOT prime number: ' . $your_number . '<br>';
		} else {
			return 'A prime number: ' . $your_number . '<br>';
		}
		// My code: when change ECHO to return === work
	}
}
echo checkNumber(5);

function isPrime($myNumber)
{
	// First, check if number is greater than 1
	if ($myNumber <= 1)
		return "Number should be > 1 <br>";

	//try to divide my every number
	for ($i = 2; $i < $myNumber; $i++) {
		//check if a number is divisible by another one, use modulo
		if ($myNumber % $i == 0)
			return 'Not a prime number <br>';
	}
	// return after loop: don't use else
	return "It is a prime <br>";
}
echo isPrime(5);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/
$myArray = [null, false, true, 1000, 'asdfas'];
$myNewArray = [];
function reverseArray($myArray)
{
	$arrayCount = count($myArray) - 1;
	for ($i = 0; $i <= $arrayCount; $i++) {
		$myNewArray[$i] = $myArray[$arrayCount - $i];
	}
	echo '<pre>';
	var_dump($myArray);
	echo '</pre>';
	echo '<pre>';
	var_dump($myNewArray);
	echo '</pre>';
}
reverseArray($myArray);
