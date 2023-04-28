<?php

$errors = array();

if (empty($_POST['name']))
    $errors['name'] = 'Name is mandatory';

if (empty($_POST['price']))
    $errors['price'] = 'Price is mandatory';
elseif (!is_numeric($_POST['price']))
    $errors['price'] = 'Price must be numeric';

if (empty($_POST['category']))
    $errors['category'] = 'Category is mandatory';

if (empty($errors)) {
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $cat = trim($_POST['category']);

    $pdo = new PDO('mysql:host=localhost;dbname=candy_shop', 'root', '');

    $prep = $pdo->prepare('INSERT INTO candy (name, price, categ_id) VALUES (?,?,?)');
    $prep->bindValue(1, $name);
    $prep->bindValue(2, $price);
    $prep->bindValue(3, $cat);

    if ($prep->execute())
        echo '<p style="color:green">Successfully inserted in the database.</p>';
    else
        echo '<p style="color:red">Problem inserting in the database.</p>';

    // $prep->execute([':name'->$name, ':price'->$price, ':cat'->$cat]);

} else {
    foreach ($errors as $key => $err) {
        echo "Problem with $key : '$err'<br>";
    }
}
