<?php

$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'root', '');
$results = $pdo->query('SELECT songs.*, artists.name FROM songs INNER JOIN artists ON songs.artist_id = artists.id');
$songs = $results->fetchAll(PDO::FETCH_ASSOC);
$pdo = null;

foreach ($songs as $key => $value) {
    echo $value['id'].' ' .$value['name'].' and song '.$value['title'].'<br>';
    echo '<a href="song-details.php?id='.$value['id'].'">See more</a><hr>';
}
?>
