<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Form Ex 3</title>
</head>

<body>

    <?php require_once 'nav.html'; ?>

    <h1>Sign In</h1>
    <?php
    $firstName = '';
    $lastName = '';
    $email = '';
    //Make sure button is cliocked
    if (isset($_POST['signinBtn'])) {
        $errors = array();
        // or $errors = false;

        $firstName = strip_tags(trim($_POST['firstName']));
        $lastName = strip_tags(trim($_POST['lastName']));
        $email = trim($_POST['email']);
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];

        //Validation
        if (empty($lastName))
            $errors['lastName'] = 'Last name is mandatory !';
        // $errors = true;

        if (empty($firstName))
            $errors['firstName'] = 'first name is mandatory!';

        if (empty($sanitizedEmail))
            $errors['email'] = 'Email is mandatory!';
        else if (strlen($email) < 8 or strlen($email) > 50)
            $errors['email'] = 'Email must be between 8 and 50 characters long.';
        else if (!strpos($email, '@')) {
            $errors['email'] = "@ is mandatory";
        } else if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is not valid';
        }

        if (empty($password) || strlen($password) < 8)
            $errors['password'] = 'Password must be at least 8 characters long.';
        else if ($password !== $cPassword)
            $errors['password'] = 'Password must match!';

        //Only if NO errors
        if (empty($errors)) {
            // (count($errors) == 0)
            // (!$errors)
            echo "First Name : $firstName <br>";
            echo "Last Name : $lastName <br>";
            echo "Email : $email <br>";

            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            // $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'spotify');
            //         if (mysqli_connect_errno())
            // die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

            // $query_db = "CREATE DATABASE IF NOT EXISTS $my_database";
            // mysqli_query($conn, $query_db);
            // // echo "Error creating database: " . mysqli_error($conn) . "\n";

            // mysqli_select_db($conn, $my_database);
            // echo "Error selected database: " . mysqli_error($conn) . "\n";

            //     $query_table = "CREATE TABLE IF NOT EXISTS users (
            //         id INT NOT NULL AUTO_INCREMENT,
            //         name VARCHAR(50) NOT NULL,
            //         email VARCHAR(100) NOT NULL,
            //         user_pass VARCHAR(100) NOT NULL,
            //         PRIMARY KEY(id)
            //     )";

            // $result_create_table = mysqli_query($conn, $query_table);


            // $query = "INSERT INTO users (first_name, last_name, email, password)
            // VALUES ('$firstName', '$lastName', '$email', '$hashPassword')";
            // $result = mysqli_query($conn, $query);

            //             $query = "SELECT title, type
            // FROM songs s
            // INNER JOIN categories c ON s.categ_id = c.id
            // ORDER BY release_date DESC
            // LIMIT 3";
            //             $result = mysqli_query($conn, $query);
            //             $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);


            // $query = "SELECT id, name, gender FROM artists";
            // $result = mysqli_query($conn, $query);
            // $artists = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // Check if user already exists
            //             $query = "SELECT * FROM users WHERE email = '$email'";
            //             $result = mysqli_query($conn, $query);
            //             // If I have a result : mail already exists in the DB
            //             if (mysqli_num_rows($result) > 0) {
            //                 echo 'Email already in use.<br>';
            //             } else {
            //                 // Insert user in the DB
            //                 $query = "INSERT INTO users(username, email, password)
            // VALUES('$username', '$email', '$password')";
            //                 $result = mysqli_query($conn, $query);


            // Check if user already exists
            // $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
            // $query = "SELECT * FROM users WHERE email = '$email'";
            // $result = mysqli_query($conn, $query);
            // $user = mysqli_fetch_assoc($result);
            // if (password_verify($_POST['password'], $user['password'])) {
            //     echo 'Log-in successfully.';
            //     setcookie('email', $email);


            // session_start();
            // $_SESSION["user"] = $user['name'];
            // echo "You login ". $_SESSION["user"]." !!!";
            // } else {
            //     echo 'Password is incorrect.';
            // }

            // =========================== session
            // $_SESSION['email'] = $_POST['email'];
            // echo '<a href="./account.php">Go to account page</a>';
            // session_start();

            // next page
            // if (isset($_SESSION['email'])) {
            //     echo 'Welcome user, email : ' . $_SESSION['email'];
            // } else {
            //     header("Location: login.php");
            //     exit();
            // }
            // // Click on logout
            // if (isset($_POST['logoutBtn'])) {
            //     unset($_SESSION['email']);
            //     header("Location: login.php");
            //     exit();
            // }

            // $query = "SELECT * FROM users";
            // $result = mysqli_query($conn, $query);
            // $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            // foreach ($users as $key => $user) {
            //     if ($user['email'] == $email && password_verify($password, $user['users_password'])) {
            //         header('Location: main.php');
            //         $_SESSION['firstname'] = $user['firstname'];
            //     } else {
            //         header('Location: register.php');
            //     }
            // }


            if ($result)
                echo "<p style='color: green'>Successfully registered</p>";
            else
                echo "<p style='color: red'>Problem registering</p>";


            if (isset($_POST['newsletter']))
                echo "Subscibed to the newsletter. <br>";

            mysqli_close($conn);
        }
    }
    ?>

    <form method="post">
    <a href="login.php">Login</a>

    <label for="lastName">LastName</label>
        <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
        <?php if (isset($errors['lastName']))
            echo $errors['lastName'];
        ?>

<label for="firstName">firstName</label>
        <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>">
        <?php if (isset($errors['firstName']))
            echo $errors['firstName'];
        ?>

<label for="email">email</label>
        <input type="password" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
        <?php if (isset($errors['email']))
            echo $errors['email'];
        ?>

        <input type="password" name="password" placeholder="Password">
        <?php if (isset($errors['password']))
            echo $errors['password'];
        ?>

        <input type="text" name="cPassword" placeholder="Confirm Password"><br>
        <label for="news">Subscribe to the newsletter</label>
        <input type="checkbox" name="newsletter" id="news"><br>
        <input type="submit" name="signinBtn" value="Signin">
    </form>


    <h4>Latest songs : </h4>
    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title : </strong>
            <?= $song['title']; ?>
        </p>

        <p>
            <strong>Type : </strong>
            <?= $song['type']; ?>
        </p>

        <hr>

    <?php endforeach; ?>


    <h1>Artists List</h1>

    <?php foreach ($artists as $artist) : ?>

        <p>
            <strong>Name : </strong>
            <?= $artist['name']; ?>
        </p>

        <p>
            <strong>Poster : </strong>
            <img src="./assets/img/<?= $artist['name'] . ".jpg"; ?>" width="200px">
        </p>

        <a href="./artist-details.php?id=<?= $artist['id']; ?>">Detail page</a>
        <hr>

        <p><?= substr($instrument['description'], 0, 30) . '...'; ?></p>
        </div>
        <a href="details_instrument.php?id=<?= $instrument['id'] ?>">Detail page</a>
        
    <?php endforeach; ?>
</body>

</html>