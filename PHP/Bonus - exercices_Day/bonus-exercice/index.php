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
    $name = $email = '';
    $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!');
    if (mysqli_connect_errno())
        die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

    $query_db = "CREATE DATABASE IF NOT EXISTS bonus_exercise";
    mysqli_query($conn, $query_db);
    // echo "Error creating database: " . mysqli_error($conn) . "\n";

    mysqli_select_db($conn, 'bonus_exercise');
    // echo "Error selected database: " . mysqli_error($conn) . "\n";

    $query_table = "CREATE TABLE IF NOT EXISTS users (
                    id INT NOT NULL AUTO_INCREMENT,
                    name VARCHAR(50) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    user_pass VARCHAR(100) NOT NULL,
                    PRIMARY KEY(id)
                )";

    $result_create_table = mysqli_query($conn, $query_table);

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (isset($_POST['submitBtn'])) {
        $errors = [];

        $name = strip_tags(trim($_POST['name']));
        $email = trim($_POST['email']);
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];

        //Validation
        if (empty($name))
            $errors['name'] = 'Name is mandatory!';

        if (empty($sanitizedEmail))
            $errors['email'] = 'Email is mandatory!';
        else if (strlen($email) < 8 or strlen($email) > 50)
            $errors['email'] = 'Email must be between 8 and 50 characters long.';
        else if (!strpos($email, '@')) {
            $errors['email'] = "@ is mandatory";
        } else if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is not valid';
        }

        if (empty($password) || strlen($password) < 3)
            $errors['password'] = 'Password must be at least 8 characters long.';
        else if ($password !== $cPassword)
            $errors['password'] = 'Password must match!';

        //Only if NO errors
        if (empty($errors)) {
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (name, email, user_pass)
            VALUES ('$name', '$email', '$hashPassword')";
            $result = mysqli_query($conn, $query);
        }
    }
    ?>

    <h2>List of users</h2>
    <?php foreach ($users as $key => $user) : ?>
        <ul>
            <h4>User: <?= $user['id']; ?></h4>
            <li><strong>Name : </strong>
                <?= $user['name']; ?></li>
            <li><strong>Email : </strong>
                <?= $user['email']; ?></li>
            <form action="edit.php" method="post">
                <input type="submit" value="Edit" name="submitEdit">
            </form>
        </ul>
    <?php endforeach; ?>


    <h2>Add new users</h2>
    <form method="post">

        <label for="name">Name</label>
        <input type="text" name="name" placeholder=" Name" value="<?php echo $name; ?>"> <br>
        <?php if (isset($errors['name']))
            echo $errors['name'];
        ?>


        <label for="email">Email</label>
        <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>"> <br>
        <?php if (isset($errors['email']))
            echo $errors['email'];
        ?>

        <input type="password" name="password" placeholder="Password"> <br>
        <?php if (isset($errors['password']))
            echo $errors['password'];
        ?>
        <input type="password" name="cPassword" placeholder="Confirm Password"><br> <br>

        <input type="submit" name="submitBtn" value="Add">
    </form>
</body>

</html>