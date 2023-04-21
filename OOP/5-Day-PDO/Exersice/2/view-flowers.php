<?php

require_once 'FlowerManager.php';

$dsn = 'mysql:host=localhost;dbname=flower_db';
$pdo = new PDO($dsn, 'root', '');

$result = $pdo->query('SELECT * FROM flowers');
$flowers = $result->fetchAll(PDO::FETCH_ASSOC);


foreach ($flowers as $flower) {
    $fl = new FlowerManager($flower['name'], $flower['price']);
    echo $fl->findAll();
    echo "<a href='./flower-detail.php?id=<?= $flower['id']; ?>Detail page</a>";
}

$dsn = null;