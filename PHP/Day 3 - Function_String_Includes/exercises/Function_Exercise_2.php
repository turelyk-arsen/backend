<?php
/*

-- Exercise 1 :

	Write a function that : 
		- Take one float $x as argument
		- Get the integer part of a positive number ($x)
		- Return this integer part

	Example :
		integerPart(5.26) // return 5
		integerPart(10.76) // return 10
*/
function positiveNumber ($x) {
	$intX = (int)$x;
	return $intX.'<br>';
}
echo positiveNumber(12.2341);
echo positiveNumber(1.999);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 2 : 
	Write a function 'isOrder' that :
		- Take one array of integer as argument
		- Checks if the elements of the arrays are ordered in ascending order.
*/
$firstArray = [50,10,15,25];
function checkArray ($firstArray) {
$sorted = sort($firstArray);
if ($firstArray == $sorted)
return 'Your array are ordered in ascending order.';
else
return 'Your array are NOT ordered in ascending order.';
}

echo checkArray($firstArray);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
-- Exercise 3 :

	Write a function 'orderArray' that :
		- Take one array of integer as argument
		- Return an array which was ordered

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
