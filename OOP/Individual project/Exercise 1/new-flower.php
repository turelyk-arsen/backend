<?php

if (isset($_POST['submitBtn'])) {
    $errors = array();
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);

    if (empty($_POST['name'])) {
        $errors['name'] = 'Field title is empty';
    }

    if (empty($_POST['price']) && !is_numeric($_POST['price'])) {
        $errors['price'] = 'Field title is empty and must be number!';
    }

    if (count($errors) == 0) {
        echo 'Form ok';

        $pdo = new PDO('mysql:host=localhost;dbname=flowers', 'root', '');
        $prep = $pdo->prepare("INSERT INTO flowers (name, price) VALUES (?,?)");
        $prep->bindParam(1, $name);
        $prep->bindParam(2, $price);
        $prep->execute();
        $pdo = null;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Add flower</h2>

    <form method='post'>
        <label for="name">Title</label>
        <input type="text" name="name" placeholder="Name">
        <?php if (isset($errors['name']))
            echo $errors['name'];
        ?><br>

        <label for="price">Price</label>
        <input type="text" name="price" placeholder="Price">
        <?php if (isset($errors['price']))
            echo $errors['price'];
        ?>
        <br>

        <input type="submit" name="submitBtn" value="Send">
    </form>

</body>

</html>