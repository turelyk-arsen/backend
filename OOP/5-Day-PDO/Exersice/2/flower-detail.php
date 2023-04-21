<?php
require_once 'FlowerManager.php';

$id = $_GET['id'];
$data = array($id);

$dsn = 'mysql:host=localhost;dbname=flower_db';
$pdo = new PDO($dsn, 'root', '');

$result = $pdo->prepare('SELECT * FROM flowers WHERE id = ?');
$result->execute($data);

$flowers = $result->fetch(PDO::FETCH_ASSOC);
// var_dump($flowers);

$flaw = new FlowerManager($flowers['name'], $flowers['price']);
echo $flaw->find($id);

// echo $flowers['name'];
// echo $flowers['price'];


$dsn = null;