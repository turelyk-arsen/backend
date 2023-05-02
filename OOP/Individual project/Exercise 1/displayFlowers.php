<?php

require_once 'Flower.php';
require_once 'Plant.php';

$pdo = new PDO('mysql:host=localhost;dbname=flowers', 'root', '');

$prep = $pdo->query("SELECT * FROM flowers");
$flowers = $prep->fetchAll(PDO::FETCH_CLASS, 'Flower');

$prep = $pdo->query("SELECT * FROM plants");
$plants = $prep->fetchAll(PDO::FETCH_CLASS, 'Plant');

$pdo = null;
return $flowers;
return $plants;
