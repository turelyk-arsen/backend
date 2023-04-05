<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Form Ex 3</title>
</head>
<body>
    <h1>Sign In</h1>
    <?php
    $firstName = '';
    $lastName = '';
    $email = '';
    //Make sure button is cliocked
    if (isset($_POST['signinBtn'])){
        $errors = array();

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];

        //Validation
        if(empty($lastName))
            $errors['lastName'] = 'Last name is mandatory !';

        if(empty($firstName))
            $errors['firstName'] = 'first name is mandatory!';

        if (empty($email))
            $errors['email'] = 'Email is mandatory!';
        else if (strlen($email) < 8 or strlen($email) > 50)
            $errors['email'] = 'Email must be between 8 and 50 characters long.';

        if (strlen($password) < 8 )
            $errors['password'] = 'Password must be at least 8 characters long.';
        else if ($password != $cPassword)
            $errors['password'] = 'Password must match!';

        //Onli if NO errors
        if(empty($errors)){
            echo "First Name : $firstName <br>";
            echo "Last Name : $lastName <br>";
            echo "Email : $email <br>";

            if(isset($_POST['newsletter']))
                echo "Subscibed to the newsletter. <br>";
        }
    }
    ?>

    <form method="post">
		<input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
            <?php if (isset($errors['lastName']))
                    echo $errors['lastName'];
            ?>

        <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>">
        <?php if (isset($errors['firstName']))
                    echo $errors['firstName'];
            ?>
        
        <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
        <?php if (isset($errors['email']))
                    echo $errors['email'];
            ?>
        
        <input type="text" name="password" placeholder="Password">
        <?php if (isset($errors['password']))
                    echo $errors['password'];
            ?>

		<input type="text" name="cPassword" placeholder="Confirm Password"><br>
		<label for="news">Subscribe to the newsletter</label>
		<input type="checkbox" name="newsletter" id="news"><br>
		<input type="submit" name="signinBtn" value="Signin">
	</form>
</body>
</html>