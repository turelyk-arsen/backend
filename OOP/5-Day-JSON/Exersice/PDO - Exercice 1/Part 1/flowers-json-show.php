<?php

require_once 'FlowerAPIManager.php';

$flower_json = new FlowerAPIManager();
$flower_json->findAll();

echo "<br> <hr>";
// var_dump($flower_json->find(1));
// echo "<br> <hr>";
// var_dump($flower_json->find(2));
$flower_json->find(1);
echo "<br> <hr>";
$flower_json->find(2);
echo "<br> <hr>";
