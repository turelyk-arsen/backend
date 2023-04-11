<?php
include_once "./templates/generation.php";

$userName = $email = '';

if (isset($_POST['signinBtn'])) {
    $errors = array();

    $userName = strip_tags(trim($_POST['userName']));
    $email = trim($_POST['email']);
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];

    if (empty($userName))
        $errors['userName'] = 'Last name is mandatory !';

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
    else if ($password !== $cPassword)
        $errors['password'] = 'Password must match!';

    if (empty($errors)) {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (user_name, email, user_pass)
        VALUES ('$userName', '$email', '$hashPassword')";
        $result = mysqli_query($mysqli, $query);

        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($users as $user) {
            setcookie('id', $user['id'], 0, '/');
            setcookie('name', $user['name'], 0, '/');
        }
    }
}
?>

<form method="post">
    <h2>Sign up</h2>
    <a href="login.php">Log in</a>
    <br>
    <label for="userName">UserName</label>
    <input type="text" name="userName" placeholder="User Name" value="<?php echo $userName; ?>">
    <?php if (isset($errors['userName']))
        echo $errors['userName'];
    ?>

    <label for="email">email</label>
    <input type="type" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
    <?php if (isset($errors['email']))
        echo $errors['email'];
    ?>

    <input type="password" name="password" placeholder="Password">
    <?php if (isset($errors['password']))
        echo $errors['password'];
    ?>

    <input type="password" name="cPassword" placeholder="Confirm Password"><br>

    <input type="submit" name="signinBtn" value="Sign in">
</form>