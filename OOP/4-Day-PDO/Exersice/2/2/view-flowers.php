<?php

require_once 'FlowerManager.php';

$allFlowers = new FlowerManager();
$flowers = $allFlowers->findAll();

$allFlowersClass = new FlowerManager();
$flowersClass = $allFlowersClass->findAllClass();

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
    <h3>List of all flowers</h3>
    <table>
        <?php foreach ($flowers as $key => $value) : ?>
            <tr>
                <th><?php echo $value['id']; ?></th>
                <th><?php echo $value['name']; ?></th>
                <th><?php echo $value['price']; ?></th>
                <th><a href="./flower-detail.php?id=<?= $value['id']; ?>">See more</a></th>
            </tr>
        <?php endforeach ?>
    </table>

    <hr><hr>
    <table>
        <?php foreach ($flowersClass as $key => $value) : ?>
            <tr>
                <th><?php echo $value->id ?></th>
                <th><?php echo $value->name ?></th>
                <th><?php echo $value->getPrice() ?></th>
                <th><a href="./flower-detail.php?id=<?= $value->id; ?>">See more</a></th>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>