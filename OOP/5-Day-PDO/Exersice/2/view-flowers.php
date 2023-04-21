<?php

require_once 'FlowerManager.php';

$dsn = 'mysql:host=localhost;dbname=flower_db';
$pdo = new PDO($dsn, 'root', '');

$result = $pdo->query('SELECT * FROM flowers');
$flowers = $result->fetchAll(PDO::FETCH_ASSOC);
$dsn = null;

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


    <?php foreach ($flowers as $flower) :
        $fl = new FlowerManager($flower['name'], $flower['price']);
        echo $fl->findAll(); ?>
        <br>
        <a href="./flower-detail.php?id=<?= $flower['id']; ?>">See more</a>

    <?php endforeach; ?>



</body>

</html>