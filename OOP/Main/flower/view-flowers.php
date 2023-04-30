<?php

require_once 'FlowerManager.php';

use Flowers\Utilities\FlowerManager;

$allFlowers = new FlowerManager();
$flowers = $allFlowers->findAll();
$allFlowersClass = new FlowerManager();
$flowersClass = $allFlowersClass->findAllClass();


// if (isset($_GET['name']))
//     $json = $flowerAPIManager->findByName($_GET['name']);
// else if (isset($_GET['column']) && isset($_GET['direction'])) {
//     // $json = $flowerAPIManager->sortBy($_GET['column'], $_GET['direction']);
//     $allFlowers = new FlowerManager();
//     $flowers = $allFlowers->sortBy($_GET['column'], $_GET['direction']);
// }
// else
//     $json = $flowerAPIManager->findAll();
// echo $json;

if (isset($_GET['column']) && isset($_GET['direction'])) {
    if ($_GET['column'] == 'name') {
        $order = ' name';
    } else if ($_GET['column'] == 'price') {
        $order = ' price';
    }

    if ($_GET['direction'] == 'asc') {
        $order .= ' ASC';
    } else if ($_GET['direction'] == 'desc') {
        $order .= ' DESC';
    }
    $flowers = $allFlowers->sortBy($order);
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
    <h3>List of all flowers</h3>
    <a href="./view-flowers.php?column=name&direction=asc">Sort name ASC</a>
    <a href="./view-flowers.php?column=name&direction=desc">Sort name DESC</a>
    <a href="./view-flowers.php?column=price&direction=asc">Sort price ASC</a>
    <a href="./view-flowers.php?column=price&direction=desc">Sort price DESC</a>
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

    <hr>
    <hr>
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
    <hr>
    <hr>
</body>

</html>