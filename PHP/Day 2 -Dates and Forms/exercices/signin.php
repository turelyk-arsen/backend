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

    $firstName = '';
    $lastName = '';
    $email = '';

    if (isset($_POST['submit_form'])) {
        $errors = array();
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pass_confirm = $_POST['pass_confirm'];


        if (empty($lastName))
            $errors['lastName'] = 'Last name is mandatory !';
        if (empty($firstName))
            $errors['firstName'] = 'First name is mandatory !';

        if (empty($email))
            $errors['email'] = 'Email is mandatory !';
        else if (8 > strlen($email) || strlen($email) > 50)
            $errors['email'] = 'The e-mail must be between 8 and 50 characters';

            if (strlen($password) < 8)
            $errors['password'] = 'Password must be at least 8 characters !';
        else if ($password != $pass_confirm)
            $errors['password'] = 'Password must match!';

        if (empty($errors)) {
            echo "First name: $firstName <br>";
            echo "Last name: $lastName <br>";
            echo "Email: $email <br>";

            if (isset($_POST['newsletter']))
                echo "Subscribed to the newsletter. <br>";
        }
        // $password_lenght = strlen($password);
        // $password_confirm_lenght = strlen($pass_confirm);

        // validation
        // if (empty($firstName)) {
        //     echo "<p>'Firstname is mandatory </p>";
        // } else {
        //     echo "<p>First name: $firstName";
        // }
        // if (empty($lastName)) {
        //     echo "<p>'Lastname is mandatory </p>";
        // } else {
        //     echo "<p>Last name: $lastName";
        // }


        // if (8 > strlen($email) || strlen($email) > 50) {
        //     echo "<p>The e-mail must be between 8 and 50 characters</p>";
        // } else {
        //     echo "<p>Email: $email";
        // }

        // if ($password_lenght <= 8) {
        //     echo "The fields Password must be at least 8 characters";
        // } else if ($password_lenght >= 8) {
        //     echo "The fields Password must be confirm";
        // } else if ($password === $pass_confirm) {
        //     echo "<p>Password correct</p>";
        // }


    }
    ?>

<h3>FORM</h3>
    <form method="POST">
        <input type="text" name="firstname" placeholder="First name" value="<?php echo $firstName; ?>"> 
        <?php if (isset($errors['firstName']))
            echo $errors['firstName'] ?><br>

        <input type="text" name="lastname" placeholder="Last name" value="<?php echo $lastName; ?>">
        <?php if (isset($errors['lastName']))
            echo $errors['lastName'] ?><br>

        <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"> 
        <?php if (isset($errors['email']))
            echo $errors['email'] ?><br>

        <input type="password" name="password" placeholder="Password"> 
        <?php if (isset($errors['password']))
            echo $errors['password'] ?><br>

        <input type="password" name="pass_confirm" placeholder="Password confirm"> <br>
        <input type="checkbox" id="newsletter" name="newsletter" value="newsletter">
        <label for="newsletter"> Subscribe to the newsletter</label><br>
        <input type="submit" value="send" name="submit_form">
    </form>
</body>

</html>