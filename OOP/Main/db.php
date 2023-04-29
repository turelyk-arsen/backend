<?php

// QUERY
$strConnection = 'mysql:host=localhost;dbname=devis';
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo = new PDO($strConnection, 'root', 'root'); // 111111111
$query = 'DELETE FROM ma_table WHERE id=12;';
$pdo->exec($query);

$pdo = new PDO('mysql:host=localhost;dbname=movie_db', 'root', '');
$result = $pdo->query('SELECT * FROM movies');

$sql = 'SELECT title, year FROM movies WHERE id = ' . $movieId;
$result = $pdo->query($sql);

$results = $pdo->query('SELECT songs.*, artists.name 
FROM songs INNER JOIN artists ON artists.id = songs.artist_id'); //222222

$row = $result->fetch(PDO::FETCH_ASSOC);
echo $row['title'];

$movies = $results->fetchAll(PDO::FETCH_ASSOC); //3333333
echo "<pre>";
var_dump($movies);
echo "</pre>";
echo $results[0]['firstname'];
foreach ($movies as $movie) {
    echo $movie['title'] . '<br>';
}
$pdo = null;  //44444

//PREPARED
if (isset($_POST['submitBtn'])) {
    $length = $_POST['length'];
    $pdo = new PDO('mysql:host=localhost;dbname=movie_db', 'root', '');
    
    // Set the placeholders
    $data = array($length, 1);
    //Prepare the statement
    $prep = $pdo->prepare("SELECT * FROM movies
    WHERE length > ? AND director_id = ?");
    /* This way of preparing also works with named placeholders
    $data = array('length' => $length, 'id' => 1);
    $prep = $pdo->prepare("SELECT * FROM movies
    WHERE length > :length AND director_id = :id");
    */

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = ? AND password = ?";
$prep = $pdo->prepare($query);
$prep->bindValue(1, $email);
$prep->bindValue(2, $password);
// Associate values to placeholder
$prep->bindValue(1, 47, PDO::PARAM_INT);
$prep->bindValue(2, 'categorie_1');

$query = "SELECT * FROM users WHERE email = :email AND password = :password";
$prep = $pdo->prepare($query);
$prep->bindValue(':email', $email);
$prep->bindValue(':password', $password);

$stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $value);

$prep->execute();
$users = $prep->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare('SELECT * FROM movies');
$stmt->execute();
$movies = $stmt->fetchAll(PDO::FETCH_CLASS, 'Movie');

$stmt = $pdo->prepare('SELECT * FROM directors');
$stmt->execute();
$directors = $stmt->fetchAll(PDO::FETCH_CLASS, 'Director');

foreach ($movies as $movie) {
    echo $movie;
    foreach ($directors as $director) {
        if ($director->id == $movie->director_id) {
            echo 'Director name : ' . $director->get_name() . '<br>';
        }
    }
    echo '<hr>';
}

//EXEC + concatenation
$sql = 'INSERT INTO bugs (user_id, label, date) ' .
'VALUES(14, "Description", "2015-11-08");';
$sql = 	'UPDATE FROM bugs ' .
'SET status = "resolved" ' .
'WHERE bug_id = ' . $bugId;

$nbRows = $pdo->exec($sql);
echo 'Update number of rows : ' . $nbRows;
if($nbRows > 0) {
    echo 'User updated';
} else {
    echo 'No user found with this ID';
}



    var_dump($movies);
    $pdo = null;
}
?>
<form method="post">
    <input type="number" name="length">
    <input type="submit" value="Submit" name="submitBtn">
</form>


<!-- SHOW ALL SONGS  -->
<?php foreach ($songs as $song): ?>  

<p>Title :
    <?= $song['title']; ?>
</p>
<p>Date :
    <?= $song['release_date']; ?>
</p>
<p>Artist :
    <?= $song['name']; ?>
</p>
<a href="./song-details.php?id=<?= $song['id']; ?>">Detail page</a>
<hr>
<?php endforeach; ?>
<!-- song-details.php SHOW ONE SONG-->
<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id']))
die('Something wrong. Missing id');
$id = $_GET['id'];
$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'root', '');
$prep = $pdo->prepare('SELECT * FROM songs 
INNER JOIN artists ON artists.id = songs.artist_id
WHERE songs.id = :id');
$prep->bindValue(':id', $id);
$prep->execute();
$song = $prep->fetch(PDO::FETCH_ASSOC);
$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Title :
        <?= $song['title']; ?>
    </p>
    <p>Date :
        <?= $song['release_date']; ?>
    </p>
    <p>Artist :
        <?= $song['name']; ?>
    </p>
    <hr>
</body>

</html>