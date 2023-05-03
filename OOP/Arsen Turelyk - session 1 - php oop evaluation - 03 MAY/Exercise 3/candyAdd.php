<?php

require_once 'InvalidInputException.php';

if (isset($_POST['submitBtn'])) {

    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $category = $_POST['category'];

    $errors = array();

    // Validate the input coming from the form.
    if (empty($_POST['name']))
        $errors['name'] = 'Name is mandatory ';

    if (empty($_POST['price']))
        $errors['price'] = 'Price is mandatory ';
    else if (!is_numeric($_POST['price']))
        $errors['price'] = 'Price must be numeric';

    // 1 with EXCEPTION
    try {
        if (empty($name))
            throw new InvalidInputException('Name is mandatory !!!');

        if (empty($price))
            throw new InvalidInputException('Price is mandatory !!!');

        if (!is_numeric($price))
            throw new InvalidInputException('Price must be numeric !!!');
    } catch (\InvalidInputException $e) {
        echo $e->getMessage();
    }

    if (!isset($e) || empty($e->getMessage())) {
        $pdo = new PDO('mysql:host=localhost;dbname=candy_shop', 'root', '');
        $prep = $pdo->prepare('INSERT INTO candy (name, price, categ_id) VALUES (?,?,?)');
        $prep->bindValue(1, $name);
        $prep->bindValue(2, $price);
        $prep->bindValue(3, $category);
        $prep->execute();
        if ($prep->execute())
            echo '<p style="color:green">Successfully inserted in the database.</p>';
        else
            echo '<p style="color:red">Problem inserting in the database.</p>';
    }


    // 2 with ERRORS ARRAY
    // if NO errors date will add to db in the candy table
    // if (empty($errors)) {

    // $pdo = new PDO('mysql:host=localhost;dbname=candy_shop', 'root', '');

    // $prep = $pdo->prepare('INSERT INTO candy (name, price, categ_id) VALUES (?,?,?)');
    // $prep->bindValue(1, $name);
    // $prep->bindValue(2, $price);
    // $prep->bindValue(3, $category);

    // // show result adding to db
    // if ($prep->execute())
    //     echo '<p style="color:green">Successfully inserted in the database.</p>';
    // else
    //     echo '<p style="color:red">Problem inserting in the database.</p>';

    // show errors in errors array
    // } else {
    //     foreach ($errors as $error) {
    //         echo $error . '<br>';
    //     }
    // }
}
