<?php

$pdo = new PDO('mysql:host=localhost;dbname=candy_shop', 'root', '');

$result = $pdo->query('SELECT * FROM categories');
$categories = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($categories as $key => $cat) {
    echo "<option value='".$cat['id']."'>".$cat['title']."</option>";
}