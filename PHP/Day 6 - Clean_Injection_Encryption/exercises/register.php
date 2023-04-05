<?php
// <!-- - Step 2 :
// If the form is submitted, you have to check :
//     * first name, last name, mail and password must not be empty !
//     * mail must be a valid one (with @symbol)
//     * passwords must be the same  -->
$messageName = $messageNameLast = $messageEmail = $messageEmail2 = $password = $message_password = $message_password_confirm ='';
$firstName = $lastName = $email = '';
$errors = [];
if (isset($_POST['submitBtn'])) {

    if (empty($_POST['firstName'])) {
        $messageName = 'Firstname is mandatory <br>';
        $errors = $messageName;
    } else {
        $firstName = $_POST['firstName'];
    }

    if (empty($_POST['lastName'])) {
        $messageNameLast = 'Lastname is mandatory <br>';
        $errors = $messageNameLast;
    } else {
        $lastName = $_POST['lastName'];
    }

    if (empty($_POST['email'])) {
        $messageEmail = 'Email is mandatory <br>';
        $errors = $messageEmail;
    } else if (!strpos($_POST['email'], '@')) {
        $messageEmail2 = '@ is mandatory <br>';
        $errors = $messageEmail2;
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['password']) && $_POST['password'] < 3) {
        $message_password = 'Password is mandatory <br>';
        $errors = $message_password;
    } else if ($_POST['password'] !== $_POST['password_confirm']) {
        $message_password_confirm = 'Password is wrong <br>';
        $errors = $message_password_confirm;
    } else {
        $password = $_POST['password'];
    }

    if (empty($errors)) {
        $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'phpmyadmin');

        if ($conn) {
            // echo "Connected";

            $query = "INSERT INTO users (firstname, lastname, email, users_password) VALUES ('$firstName', '$lastName', '$email', '$password')";
            $result = mysqli_query($conn, $query);

            mysqli_close($conn);
        }
    }
//     else {
//     header('Location: register.php');
// }
} 

?>

<div>
    <form action="register.php" method="POST">
        <label for="firstName">First name:</label> <br>
        <input type="text" name="firstName" placeholder="First name" value="<?php echo $firstName; ?>">
        <span><?php echo $messageName; ?></span>

        <label for="lastName">Last name:</label> <br>
        <input type="text" name="lastName" placeholder="Last name" value="<?php echo $lastName; ?>">
        <span><?php echo $messageNameLast; ?></span>

        <label for="email">Email:</label> <br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
        <span><?php echo $messageEmail; ?></span>
        <span><?php echo $messageEmail2; ?></span>

        <label for="password">Password:</label> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <span><?php echo $message_password; ?></span>

        <label for="password_confirm">Password confirm:</label> <br>
        <input type="password" name="password_confirm" placeholder="Password confirm"> <br>
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

    input,
    label {
        margin: 5px;
        padding: 5px;

    }

    span {
        padding: 5px;
        color: red;
    }
</style>