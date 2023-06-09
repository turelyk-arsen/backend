<?php

/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

		If you're stuck on this one, you probably can find solution online. Try to understand it.

	*/

// Each row
for ($i = 1; $i <= 5; $i++) {
	// Each column/*
	for ($j = 1; $j <= $i; $j++) {
		echo '*';
	}
	echo '<br>';
}

/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	*/
// MY SOLUTION 
for ($i = 1; $i <= 5; $i++) {
	// Each column/*
	for ($j = 1; $j <= $i; $j++) {
		echo '*';
	}
	echo '<br>';
}
for ($i = 1; $i <= 5; $i++) {
	// Each column/*
	for ($j = 5; $j >= $i; $j--) {
		echo '*';
	}
	echo '<br>';
}
/*
	- Final exercise - ONLY FOR THE BEASTS - BONUS

		We have an array of integers, unsorted, with all numbers from 1 to 50 BUT one element is missing (the array therefore contains 49 elements).
		
		The goal is to find the missing item (the missing number).
		However, you have 3 constraints:
		- You can use as many loops as you want BUT you have the right to iterate/loop the array only once!
		- You have the right to use only one variable !
		- You can use only one function : count()

		An example with an array with 9 elements :

			$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Missing number is 7

	        $var = ...

	        for (int i = 0; i < count($array); ++i)
	        {
		      ...
	        }

	        echo "Missing number is: " . $var;

	*/
	// not true!!! 
$array = array(5, 1, 3, 2, 9, 6, 8, 4, 10);
// Missing number is 7

$var =  0;

for ($i = 0; $i < count($array); $i++) {
	if ($array[$i] == $var) {
		break;
	}
	$var++;
}

echo "Missing number is: " . $var;
