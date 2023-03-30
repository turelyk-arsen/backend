<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
			table,th{
			border: 1px solid;
			width: 10%;

		}
	</style>

</head>

<body>
	<form method="POST">
		<label for="">Send NUMBER</label>
		<input type="integer" name="number">
		<input type="submit" name="button" value="send">
	</form>

	<?php
	if (isset($_POST['button'])) {
		$number = $_POST['number'];
		$table = [];
		if (is_numeric($number)) {
			for ($i = 1; $i <= 10; $i++) {
				$table = $i * $number;
				echo "<table><tr>
			<th>$number * $i = </th>
			<th>$table</th>
			</tr></table>";
			}
		} else {
			echo "<h2> Please write a number </h2>";
		}
	}


	/* -- Exercise : 
	2.1 (Already done in previous exercise) :
	Write a PHP script that gives the multiplication table of 2.
	Multiplication table from 1 to 10.

	2.2 :
	Edit this script to give the multiplication table of any number ($x for example) in a HTML table

	2.3 :
	Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (numeric value).

	2.4 :
	Display the multiplication table in a nice HTML format table style.
*/
	?>
</body>

</html>