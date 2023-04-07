<?php

require 'configure.php';

$conn = mysqli_connect($servername, $user_mysql, $password_mysql);

if (mysqli_connect_errno())
    die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

$query_db = "CREATE DATABASE IF NOT EXISTS $my_database";
mysqli_query($conn, $query_db);
// echo "Error creating database: " . mysqli_error($conn) . "\n";

mysqli_select_db($conn, $my_database);
// echo "Error selected database: " . mysqli_error($conn) . "\n";

$query_table = "CREATE TABLE IF NOT EXISTS users (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        user_pass VARCHAR(100) NOT NULL,
        PRIMARY KEY(id)
    )";

$result_create_table = mysqli_query($conn, $query_table);

$message_name = $message_email = $message_pass = '';
$name = $email = $password = '';
if (isset($_POST['submit'])) {
    $errors = false;

    $name = strip_tags(trim($_POST['name']));
    if (empty($name)) {
        $errors = true;
        $message_name = "Name is mandatory";
    }

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (empty($email) || strlen($email) < 2) {
        $errors = true;
        $message_email = "Email is mandatory";
    } else if (!strpos($email, '@')) {
        $errors = true;
        $message_email = "@ is mandatory";
    } else if (!$email_valid) {
        $errors = true;
        $message_email = "Incorrect email";
    }

    $password = $_POST['password'];
    if (empty($password) || strlen($password) < 3) {
        $errors = true;
        $message_pass = 'Password is mandatory <br>';
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    if (empty($errors)) {
        $query_add_user = "INSERT INTO users (name, email, user_pass) VALUES ('$name', '$email', '$password')";
        $result_add_user = mysqli_query($conn, $query_add_user);
        mysqli_close($conn);
    }
}

?>

<h2>Register form</h2>

<form method='POST'>
    <a href="login.php">Login</a>

    <div class="form-floating mb-3">
        <label for="name">Name</label>
        <input type="text" name='name' placeholder="John Dou">
        <?php echo $message_name; ?>
    </div>

    <div>
        <label for="email">Email address</label>
        <input type="email" name='email' placeholder="name@example.com">
        <?php echo $message_email; ?>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name='password' placeholder="Password">
        <?php echo $message_pass; ?>
    </div>

    <input type="submit" value="Submit" name="submit">
</form>