<?php
require_once 'connect.php';
require_once 'InvalidInputException.php';

// create new object
$connection = new Connect();

$users = Connect::getUsers();

// show all users
foreach ($users as $user) {
        echo 'Username:' . $user['username'] . '<br>';
        echo 'Email:' . $user['email'] . '<br>';
        echo 'Password:' . $user['password'] . '<hr>';
}

if (isset($_POST['submitBtn'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // check all input with new class Exception --- only EMPTY
        try {
                $connection->checkInput($username, $email, $password);
        } catch (\InvalidInputException $e) {
                echo $e->getMessage();
        } finally {
                if (!isset($e) || empty($e->getMessage())) { // !isset($e) || --- chatGPT prompted me this
                        $connection->insertUser($username, $email, $password);
                }
        }
}

?>

<!-- create form -->
<h1>Add a new user : </h1>

<form method="post">
        <input type="text" name="username" placeholder="Username"><input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Submit" name="submitBtn">
</form>