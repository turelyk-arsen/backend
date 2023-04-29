<?php
require_once 'connect.php';
$connection = new Connect();
$users = $connection->getUsers();
foreach ($users as $user) {
        echo 'Username:' . $user['username'] . '<br>';
        echo 'Email:' . $user['email'] . '<br>';
        echo 'Password:' . $user['password'] . '<hr>';
}
if (isset($_POST['submitBtn'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $connection->insertUser($name, $email, $password);
}

?>

<h1>Add a new user : </h1>

<form method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="submit" value="Submit" name="submitBtn">
</form>