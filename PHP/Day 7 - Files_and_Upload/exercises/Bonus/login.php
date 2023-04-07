<?php

require 'configure.php';

$message_name = $message_email = $message_pass = '';
$name = $email = $password = '';

if (isset($_POST['submitlogin'])) {
    $errors = false;

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
    }

    if (empty($errors)) {
        $conn = mysqli_connect($servername, $user_mysql, $password_mysql, $my_database);

        $query_check_user = "SELECT * FROM users WHERE email = '$email'";
        $result_check_user = mysqli_query($conn, $query_check_user);

        $user = mysqli_fetch_assoc($result_check_user);

        if (password_verify($password, $user['user_pass'])) {
            session_start();
            $_SESSION["user"] = $user['name'];
            echo "You login ". $_SESSION["user"]." !!!";

        } else {
            echo 'Password is incorrect';
        }



        mysqli_close($conn);
    }
}


?>

<h2>Login</h2>

<form method='POST'>
    <a href="ind.php">Sign up</a>

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

    <input type="submit" value="Submit" name="submitlogin">
</form>