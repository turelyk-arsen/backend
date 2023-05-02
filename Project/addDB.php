<?php

if (isset($_POST['submit'])) {
    $errors = array();

    $name = strip_tags(trim($_POST['name']));
    if (empty($name))
            $errors['name'] = 'Name is mandatory !';

    // try {
    //         $connection->checkName($_POST['name']);
    // } catch (\InvalidInputException $e) {
    //         echo $e->getMessage();
    // }

    $email = trim($_POST['email']);
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (empty($sanitizedEmail))
            $errors['email'] = 'Email is mandatory!';
    else if (strlen($email) < 8 or strlen($email) > 50)
            $errors['email'] = 'Email must be between 8 and 50 characters long.';
    else if (!strpos($email, '@')) {
            $errors['email'] = "@ is mandatory";
    } else if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is not valid';
    }

    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    if (empty($password) || strlen($password) < 8)
            $errors['password'] = 'Password must be at least 8 characters long.';
    else if ($password !== $cPassword)
            $errors['cpassword'] = 'Password must match!';

    if (empty($errors)) {
             $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=project", 'root', '');
            $query = $pdo->prepare('INSERT INTO users(name, email, password) VALUES (:name, :email, :password)');
            $query->bindValue(':name', $name);
            $query->bindValue(':email', $email);
            $query->bindValue(':password', $passwordHash);
            $result = $query->execute();
            $pdo = null;
            // return $result;
            setcookie('login', $cookie_value, time() + (86400 * 30), "/");

        } catch (\Exception $e) {
            echo "Something did not go as planned...<br>";
            echo $e;
        }

    }

    // if (!empty($errors)) {
    //         throw new InvalidInputException(implode("\n", $errors));
    //     }


    //     $password = password_hash($password, PASSWORD_DEFAULT);
    //     $connection->insertUser($name, $email, $password);

    //     echo "<div style='color: green; font-size: 20px; background-color: lightgrey;'>New user was successfully added.</div>";

}