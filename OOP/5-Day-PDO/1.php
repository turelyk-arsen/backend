<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=movie_db;', 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = "INSERT INTO movies (title, length)
// VALUES ('Harry Potter', 110)";
// $pdo->exec($sql);


$result = $pdo->query('SELECT * FROM movies');

// 3. fetch the result
$movies = $result->fetchAll(PDO::FETCH_ASSOC);


foreach ($movies as $movie) {
    echo $movie['title'] . '<br>';
}

//close the conection
$pdo = null;
echo "<pre>";
var_dump($movies);
echo "</pre>";
?>
<a href=""></a>