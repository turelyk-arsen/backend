<?php
session_start();
// <!-- - Step 2 :
// If the form is submitted, you have to check :
//     * first name, last name, mail and password must not be empty !
//     * mail must be a valid one (with @symbol)
//     * passwords must be the same  -->
$messageName = $messageNameLast = $messageEmail = $messageEmail2 = $password = $message_password = $message_password_confirm = '';

$firstName_correct = $lastName_correct = $email = '';
$errors = [];
if (isset($_POST['submitBtn'])) {

    $firstName = trim($_POST['firstName']);
    if (empty($firstName)) {
        $messageName = 'Firstname is mandatory <br>';
        $errors = $messageName;
    } else {
        $firstName_correct = strip_tags($firstName);
        $_SESSION['firstname'] = $firstName_correct;
    }

    $lastName = trim($_POST['lastName']);
    if (empty($lastName)) {
        $messageNameLast = 'Lastname is mandatory <br>';
        $errors = $messageNameLast;
    } else {
        $lastName_correct = strip_tags($lastName);
    }

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
    } else if ($password !== $_POST['password_confirm']) {
        $message_password_confirm = 'Password is wrong <br>';
        $errors = $message_password_confirm;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    if (empty($errors)) {
        $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'phpmyadmin');

        if ($conn) {
            // echo "Connected";

            $query = "INSERT INTO users (firstname, lastname, email, users_password) VALUES ('$firstName_correct', '$lastName_correct', '$email', '$password')";
            $result = mysqli_query($conn, $query);
            header('Location: main.php');
            mysqli_close($conn);
        }
    }
    //     else {
    //     
    // }
}

?>

<div>
    <h2>Sign up</h2>
    <a href="login.php">Log IN</a>

    <form action="register.php" method="POST">
        <label for="firstName">First name:</label> <br>
        <input type="text" name="firstName" placeholder="First name" value="<?php echo $firstName_correct; ?>">
        <span><?php echo $messageName; ?></span>

        <label for="lastName">Last name:</label> <br>
        <input type="text" name="lastName" placeholder="Last name" value="<?php echo $lastName_correct; ?>">
        <span><?php echo $messageNameLast; ?></span>

        <label for="email">Email:</label> <br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
        <span><?php echo $messageEmail; ?></span>
        <span><?php echo $messageEmail2; ?></span>

        <label for="password">Password:</label> <br>
        <input type="password" name="password" placeholder="Password">
        <span><?php echo $message_password; ?></span>

        <label for="password_confirm">Password confirm:</label> <br>
        <input type="password" name="password_confirm" placeholder="Password confirm"> 
        <span><?php echo $message_password_confirm; ?></span>

        <input type="submit" value="Submit" name='submitBtn'>
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
    label, h2 {
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