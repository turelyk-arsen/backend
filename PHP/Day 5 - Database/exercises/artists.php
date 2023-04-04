<?php
require 'navigate.html';

// - Part 2 :

// Add a new attribute to "artists" table.
// This attribute is "poster" (we will save url/path to picture).

// Create an "artists.php" page to display : name / picture

$conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'spotify_new');

if ($conn) {
    // echo "Connected Successfully <br>";

    //  $query = "ALTER TABLE artists ADD COLUMN poster VARCHAR(45);";
    $query = "SELECT * FROM artists";
    $result = mysqli_query($conn, $query);
    $artists = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
        img {
            width: 5%;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <?php foreach ($artists as $key => $artist) : ?>
                <th><?php echo $key + 1; ?></th>
                <th><?php echo $artist['name']; ?></th>
                <th><img src="img/madonna.jpg">
                </th>
        </tr>
    <?php endforeach; ?>
    </table>

</body>

</html>