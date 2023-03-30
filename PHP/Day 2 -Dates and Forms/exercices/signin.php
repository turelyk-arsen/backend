<!--             - Last Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter" -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>FORM</h3>
    <form method="POST">
        <input type="text" name="firstname" placeholder="First name"> <br>
        <input type="text" name="lastname" placeholder="Last name"><br>
        <input type="email" name="email" placeholder="Email"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <input type="password" name="pass_confirm" placeholder="Password confirm"> <br>
        <input type="checkbox" id="newsletter" name="newsletter" value="newsletter">
        <label for="newsletter"> Subscribe to the newsletter</label><br>
        <input type="submit" value="send" name="submit_form">
    </form>

    <?php
    if (isset($_POST['submit_form'])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        $pass_confirm =$_POST['pass_confirm'];
        $password_lenght = strlen($password);
        $password_confirm_lenght = strlen($pass_confirm);

        if (empty($firstName)) {
            echo "<p>'Firstname is mandatory </p>";
        } 
        if (empty($lastName)) {
            echo "<p>'Lastname is mandatory </p>";
        } 

        if (8 > strlen($email) ||  strlen($email) > 50) {
        echo "<p>The e-mail must be between 8 and 50 characters</p>";
        }
        
        if ($password === $pass_confirm && $password_lenght >= 8 && $password_confirm_lenght >=8 ) {
            echo "The fields Password and Confirmation must be identical and have at least 8 characters";
        }

        
            echo "<p>First name: $firstName";
            echo "<p>Last name: $lastName";
            echo "<p>Email: $email";
        
    }






    ?>

</body>

</html>