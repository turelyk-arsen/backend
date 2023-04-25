<?php

require_once 'FlowerAPIManager.php';

use Flowers\Utilities\FlowerAPIManager as FlwMngr;

$flowerAPIManager = new FlwMngr();
$json = $flowerAPIManager->find($_GET['id']);

echo $json;