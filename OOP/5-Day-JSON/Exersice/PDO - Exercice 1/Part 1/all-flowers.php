<?php

require_once 'FlowerAPIManager.php';

$flower_json = new FlowerAPIManager();
$flower_json->findAll();