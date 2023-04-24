<?php

require_once 'FlowerAPIManager.php';
$flower_json = new FlowerAPIManager();


echo "<br> <hr>";
$flower_json->find(1);
echo "<br> <hr>";
$flower_json->find(2);
echo "<br> <hr>";