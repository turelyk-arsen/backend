<?php

if (isset($_POST['submitBtn'])) {
    $errors = array();
    $name =strip_tags(trim($_POST['name']));
    $price = trim($_POST['price']);
    $color = strip_tags(trim($_POST['color']));

    if (empty($_POST['name'])) {
        $errors['name'] = 'Field title is empty';
    }

    if (empty($_POST['price']) && !is_numeric($_POST['price'])) {
        $errors['price'] = 'Field title is empty and must be number!';
    }

    if (count($errors) == 0) {
        echo 'Form ok';

        if (isset($_POST['type'])) {
            $choice = $_POST['type'];

            if ($choice == 'plant') {
                $pdo = new PDO('mysql:host=localhost;dbname=flowers', 'root', '');
                $prep = $pdo->prepare("INSERT INTO plants (name, price) VALUES (?,?)");
                $prep->bindParam(1, $name);
                $prep->bindParam(2, $price);
                $prep->execute();
                $pdo = null;
            } else if ($choice == 'flower') {
                if (empty($_POST['color'])) {
                    $errors['color'] = 'Color is empty';
                } else {
                    $pdo = new PDO('mysql:host=localhost;dbname=flowers', 'root', '');
                    $prep = $pdo->prepare("INSERT INTO flowers (name, price, color) VALUES (?,?,?)");
                    $prep->bindParam(1, $name);
                    $prep->bindParam(2, $price);
                    $prep->bindParam(3, $color);
                    $prep->execute();
                    $pdo = null;
                }
            }
        }
    }
}
