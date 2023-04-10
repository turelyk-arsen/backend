<?php
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

        if (empty($password) || strlen($password) < 3)
            $errors['password'] = 'Password must be at least 8 characters long.';

        //Only if NO errors
        if (empty($errors)) {
            $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'bonus_exercise');
            if (mysqli_connect_errno())
                die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($users as $key => $user) {
                if ($user['email'] == $email && password_verify($password, $user['user_pass'])) {
                    // header('Location: main.php');
                    // $_SESSION['firstname'] = $user['firstname'];
                    // setcookie('email', $user['email'], 0, '/');
                    setcookie('id', $user['id'], 0, '/');
                    setcookie('name', $user['name'], 0, '/');
                } else {
                    header('Location: login.php');
                }
            }
            mysqli_close($conn);
        }
    }
    if (isset($_COOKIE['name'])) {
        header('Location: form.php');
    } 

    ?>
    <h2>Login</h2>
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