<?php

/* 
-- Exercise : 
Let's go back to 'spotify'
Create a page 'songs.php' where you should see all songs.
Use PDO.
Then, create a page 'song-details.php' that show detail page of a specific song.
*/

$pdo = new PDO('mysql:host=localhost;dbname=spotify;', 'root', '');

$result = $pdo->query('SELECT * FROM songs');
$songs = $result->fetchAll(PDO::FETCH_ASSOC);

foreach($songs as $song) {
 echo $song['title'].'<br>';
//  echo "<a href='song-details.php'>details</a>".'<br><br>';

}

$pdo = null;
?>
 <!-- <a href="./song-details.php?id=<?= $song['id']; ?>">Detail page</a> -->
