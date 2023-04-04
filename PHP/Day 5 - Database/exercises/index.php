<?php 
    require 'navigate.html';


    $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'spotify_new');

if ($conn) {
    // echo "Connected!! <br>";

    $query = "SELECT * FROM songs ORDER BY release_date";
    $queryCount = "SELECT COUNT(title) FROM songs";

    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $queryCount);

    $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $num = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    // echo print_r($num);

    foreach ($songs as $key => $song) {
        if ($key >= 6 )
        echo "<div>
        <p> New song is : $song[title] and realese date - $song[release_date]
         </p></div>";
    }

    mysqli_close($conn);
} else {
    echo "ERROR";
}
    ?>
    <style>
        div {
            width: 80%;
            margin: auto;
        }
    </style>