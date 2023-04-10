<?php
$name = $email = '';
if (isset($_POST['changeBtn'])) {
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

        $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'bonus_exercise');
        if (mysqli_connect_errno())
            die("You can not connect to the server. " . mysqli_connect_errno() . "\n");
        $query = "UPDATE users SET name = '$name', email = '$email', user_pass = '$hashPassword' 
        WHERE id = $_COOKIE[id]";
        $result = mysqli_query($conn, $query);
        setcookie('name', $_COOKIE['name'], time() -10, '/');
        setcookie('name', $name, 0, '/');

        if ($result)
        header('Location: index.php');

    //     if ($result)
    //     echo "<p style='color: green'>Successfully registered</p>";
    // else
    //     echo "<p style='color: red'>Problem registering</p>";
    }
    mysqli_close($conn);

}

if (isset($_POST['deleteBtn'])) {

    $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'bonus_exercise');
    if (mysqli_connect_errno())
        die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

    $query = "DELETE FROM users WHERE id = $_COOKIE[id]";
    $result = mysqli_query($conn, $query);
    setcookie('id', $_COOKIE['id'], time() -10, '/');
    setcookie('name', $_COOKIE['name'], time() -10, '/');
    header('Location: index.php');
    mysqli_close($conn);
}

if (isset($_POST['outBtn'])) {
    setcookie('id', $_COOKIE['id'], time() -10, '/');
    setcookie('name', $_COOKIE['name'], time() -10, '/');
    header('Location: index.php');
}

?>


<h2>Change date your <?php echo $_COOKIE["name"]; ?></h2>
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

        <input type="submit" name="changeBtn" value="Change">
        <input type="submit" name="deleteBtn" value="Delete">
        <input type="submit" name="outBtn" value="Out">

    </form>