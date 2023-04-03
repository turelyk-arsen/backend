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
    session_start();

    echo '<h2>Hello! You are register. User ' .
        $_SESSION['name'] . ' Your email: ' . $_SESSION['email'] . '.</hr><br>';
    // print_r($_SESSION);
    ?>

<form method="post">
    <input type="submit" value="Logout" name="submitOut">
</form>

<?php
if(isset($_POST['submitOut'])) {
    header('location: login.php');
}
?>
</body>

</html>