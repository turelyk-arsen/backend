<?php
require_once 'FlowerAPIManager.php';

use Flowers\Utilities\FlowerAPIManager;


$flowerAPIManager = new FlowerAPIManager();

// if (isset($_GET['name']))
//     $json = $flowerAPIManager->findByName($_GET['name']);
// else if (isset($_GET['column']) && isset($_GET['direction']))
//     $json = $flowerAPIManager->sortBy($_GET['column'], $_GET['direction']);
// else
//     $json = $flowerAPIManager->findAll();
    $json = $flowerAPIManager->findAll();
echo $json;
