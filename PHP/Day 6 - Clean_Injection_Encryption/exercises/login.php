<?php
session_start();

$messageName = $messageNameLast = $messageEmail = $messageEmail2 = $password = $message_password = $message_password_confirm = '';

$firstName_correct = $lastName_correct = $email = '';
$errors = [];

if (isset($_POST['submitBtn'])) {

    $email = trim($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (empty($email) || strlen($email) < 5) {
        $messageEmail = 'Email is mandatory <br>';
        $errors = $messageEmail;
    } else if (!strpos($email, '@')) {
        $messageEmail = '@ is mandatory <br>';
        $errors = $messageEmail;
    } else if (!$valid_email) {
        $messageEmail = 'Incorrect email <br>';
        $errors = $messageEmail;
    }

    $password = $_POST['password'];
    if (empty($password) || strlen($password) < 3) {
        $message_password = 'Password is mandatory <br>';
        $errors = $message_password;
    }


    if (empty($errors)) {
        $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'phpmyadmin');

        if ($conn) {

            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);


            foreach ($users as $key => $user) {

                if ($user['email'] == $email && password_verify($password, $user['users_password'])) {
                    header('Location: main.php');
                } else {
                    header('Location: register.php');
                }
            }


            mysqli_close($conn);
        }
    }
}

?>

<div>
    <h2>Log IN</h2>
    <a href="register.php">Sign up</a>

    <form action="login.php" method="POST">

        <label for="email">Email:</label> <br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
        <span><?php echo $messageEmail; ?></span>

        <label for="password">Password:</label> <br>
        <input type="password" name="password" placeholder="Password">
        <span><?php echo $message_password; ?></span>

        <input type="submit" value="Log IN" name='submitBtn'>
    </form>
</div>



<style>
    div {
        width: 200px;
        margin: 50px;
        border: 2px solid lightgray;
        border-radius: 5px;
    }

    a {
        display: flex;
        justify-content: flex-end;
        padding-right: 10px;
    }

    input,
    label,
    h2 {
        margin: 5px;
        padding: 5px;

    }

    h2 {
        text-align: center;
    }

    span {
        padding: 5px;
        color: red;
    }
</style>