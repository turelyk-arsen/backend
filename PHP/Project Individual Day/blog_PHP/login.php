<?php
  include_once "./templates/generation.php";

    $email = '';
    if (isset($_POST['loginBtn'])) {
        $errors = [];

        $email = trim($_POST['email']);
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        //Validation
        if (empty($sanitizedEmail))
            $errors['email'] = 'Email is mandatory!';
        else if (strlen($email) < 8 or strlen($email) > 50)
            $errors['email'] = 'Email must be between 8 and 50 characters long.';
        else if (!strpos($email, '@')) {
            $errors['email'] = "@ is mandatory";
        } else if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is not valid';
        }

        if (empty($password) || strlen($password) < 1)
            $errors['password'] = 'Password must be at least 8 characters long.';

        //Only if NO errors
        if (empty($errors)) {

            $query = "SELECT * FROM users";
            $result = mysqli_query($mysqli, $query);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($users as $key => $user) {
                if ($user['email'] == $email && password_verify($password, $user['user_pass'])) {
                    setcookie('id', $user['id'], 0, '/');
                    setcookie('user_name', $user['user_name'], 0, '/');
                } else {
                    header('Location: login.php');
                }
            }
            mysqli_close($mysqli);
        }

        if (isset($_COOKIE['user_name'])) 
        header('Location: index.php');
    }

    if (isset($_COOKIE['user_name'])) 
    header('Location: index.php');
    
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <?php
    generation_head_menu($mysqli);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <?php
                generation_posts_index($mysqli);
                ?>
            </div>
            <div class="col-2">
    <h2>Login</h2>
    <a href="index.php">Sign up</a>
    <br>
    <form method="post">

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>"> <br>
        <?php if (isset($errors['email']))
            echo $errors['email'];
        ?>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password"> <br>
        <?php if (isset($errors['password']))
            echo $errors['password'];
        ?>

        <input type="submit" name="loginBtn" value="Login">
    </form>
            </div>
        </div>
    </div>

</body>

</html>
