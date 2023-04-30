<?php

require_once 'FlowerManager.php';
$id = $_GET['id'];
$flowerOne = new FlowerManager();
$flower = $flowerOne->find($id);
$flowerClass = $flowerOne->findClass($id);

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
    <a href="view-flowers.php">Back</a>
    <hr>

    <?php
    echo $flower['id'] . '<br>';
    echo $flower['name'] . '<br>';
    echo $flower['price'] . '<br>';
    ?>
    <br>
    <hr>
    <hr>
    <hr>
    <?php

    echo $flowerClass->id . '<br>';
    echo $flowerClass->name . '<br>';
    echo $flowerClass->getPrice() . '<br>';


    ?>
</body>

</html>