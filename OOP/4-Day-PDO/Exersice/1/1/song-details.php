<?php

$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'root', '');

$id = $_GET['id'];
$result = $pdo->prepare('SELECT * FROM songs WHERE id = ?');
$result->bindParam(1, $id);
$result->execute();
$song = $result->fetch(PDO::FETCH_ASSOC);
$pdo = null;


echo $song['id'] . ' ' . $song['title'] . ' and song ' . $song['release_date'] . '<br>';

