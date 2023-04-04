<?php

require 'navigate.html';

$conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'spotify_new');

if ($conn) {
    // echo "Connected!! <br>";

    $query = "SELECT artists.name, songs.title FROM artists INNER JOIN songs ON artists.id = songs.artist_id";
    $result = mysqli_query($conn, $query);

    $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($songs as $key => $song) {
        echo "<div><p>Artist : $song[name] with song -   $song[title]  </p> </div>";
    }

    mysqli_close($conn);
} else {
    echo "ERROR";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p {
        color: grey;
    }
     div {
            width: 80%;
            margin: auto;
        }
    </style>
</style>
</head>
<body>
    
</body>
</html>
