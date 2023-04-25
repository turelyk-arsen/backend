<?php

require_once 'FlowerAPIManager.php';

use Flowers\Utilities\FlowerAPIManager;

$flowerAPIManager = new FlowerAPIManager();
$json = $flowerAPIManager->findAll();

echo $json;