<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <?php
    /*
    Method attribute: 
    defines HOW you send the request to the server.
    Two Ways: GET and POST.
    When the server receives request/data from a form, the date are saved
    in a superglobal variabel.
    $_GET
    $_POST

    GET method:
    It will send the date through the URL directly.
    form.php?firstmane=simon&lastname=bertrand

    POST method: 
    will send the date without editing the URL.
    Use post when information are sensitive or you need to send a file or a lot of data.

    action attribute: choose WHERE (which page) to send the date to.
    */

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $firstName = '';
    if (isset($_POST['submitBtn'])) {
        $errors = false;
        // saving data coming from the form in the variable
        $firstName = $_POST['firstname'];
    }
    //validation
    if (empty($firstName)){
        echo 'Firstname is mandatory <br>';
        $errors = true;
    }

    if (empty($_POST['lastname'])) {
        echo 'Lastname is mandatory <br>';
        $errors = true;
    }

    // Only if NO errors
    if ($errors == false) {
        echo 'Form was submitted. First name:'.$_POST['firstname'].'/Last name: '.$_POST['lastname'];
    }

    // end of PHP
    ?>
    <form method="POST">
        <input type="text" name="firstname" placeholder="First name" value="<?php echo $firstName; ?>"> <br>
        <input type="text" name="lastname" placeholder="Last name"> <br>
        <textarea name="message" cols="15" rows="5"></textarea> <br>
        <input type="submit" name="submitBtn" value="Send message">
    </form>
</body>

</html>