<?php
require_once 'connect.php';
$connection = new Connect();
$users = $connection->getUsers();

foreach ($users as $user) {
        echo 'Username:' . $user['username'] . '<br>';
        echo 'Email:' . $user['email'] . '<hr>';
        // echo 'Password:' . $user['password'] . '<hr>';
}

if (isset($_POST['submitBtn'])) {
        $errors = array();

        $name = strip_tags(trim($_POST['username']));
        if (empty($name))
                $errors['name'] = 'Name is mandatory !';

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

        $password = $_POST['pwd'];
        if (empty($password) || strlen($password) < 8)
                $errors['password'] = 'Password must be at least 8 characters long.';
        // else if ($password !== $cPassword)
        //         $errors['password'] = 'Password must match!';

        if (empty($errors)) {
                // echo "First Name : $firstName <br>";
                // echo "Last Name : $lastName <br>";
                // echo "Email : $email <br>";

                $password = password_hash($password, PASSWORD_DEFAULT);
                $connection->insertUser($name, $email, $password);
        }
}

?>

<h1>Add a new user : </h1>

<form method="post">
        <input type="text" name="username" placeholder="Username"> 
        <?php if (isset($errors['name']))
            echo $errors['name'];
        ?><br>
        <input type="email" name="email" placeholder="Email">
        <?php if (isset($errors['email']))
            echo $errors['email'];
        ?><br>
        <input type="password" name="pwd" placeholder="Password">
        <?php if (isset($errors['password']))
            echo $errors['password'];
        ?><br>
        <input type="submit" value="Submit" name="submitBtn">
</form>