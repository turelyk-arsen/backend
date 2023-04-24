<?php

require_once 'FlowerAPIManager.php';
$flowerAPIManager = new FlowerAPIManager();
// You write ?id=1 in line and press enter --- this is for ID
// $json = $flowerAPIManager->find($_GET['id']);

// echo $json;

// NAME ?name=rosa
// $json1 = $flowerAPIManager->findByName($_GET['name']);

// echo $json1;

// NAME ?name=rosa
$json2 = $flowerAPIManager->sortBy($_GET['column'], $_GET['direction']);

echo $json2;
