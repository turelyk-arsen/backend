<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<?php

	/* 
-- Exercise 1 :
	
	1.1 : 
	Create a new page with a basic connection form with email and password input.

	1.2 :
	Get the click of the button.

	1.3 :
	Check if the mail contains the '@' symbol. 
	If yes, display 'valid email';
	If no, display 'invalid email';

	To do this you have to check for "str_pos" function !

	1.4 :
	When the user validates the form: display a message in red if invalid, show in green if valid.
echo '<p style="color:red">not valid</p>';

*/
	// echo '<pre>';
	// var_dump($_POST);
	// echo '</pre>';

	$email = '';
	if (isset($_GET['button'])) {
		// $errors = false;
		$email = $_GET['email'];
		if (strpos($email, '@')) {
			// echo 'valid email';
			echo '<p style="color:green"> valid</p>';
		} else {
			// echo 'invalid email';
			echo '<p style="color:red">not valid</p>';
		}
	}
	?>

	<form action="Form_Exercise_1.php" method="GET">
		<input type="text" name="email" value="<?php echo $email ?>"><br>
		<input type="password" name="password"><br>
		<input type="submit" name="button" value="Login">
	</form>

</body>

</html>