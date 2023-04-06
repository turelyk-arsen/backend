<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, 
		located in the same folder as this script.
		Split each lines with a horizontal line in between. 

	*/

if (file_exists('message.txt')) {
	$file_get = fopen('message.txt', 'r');
	while (!feof($file_get)) {
		$line = fgets($file_get);
		echo "<p> $line </p>";
		echo "<hr>";
	}

	fclose($file_get);
} else
	echo "Your file doesnt exist!";
