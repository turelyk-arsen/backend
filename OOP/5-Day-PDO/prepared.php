<?php

/*
PREPARED STATEMENTS
We use prepared statement for two main reasons : more secure (prevent SQL injection) and faster to execute().
*/

if (isset($_POST['submitBtn'])) {

    $length = $_POST['length'];

    // 1. Connect to the DB
    $pdo = new PDO('mysql:host=localhost;dbname=movie_db', 'root', '');

    // Set the placeholders
    $data = array($length, 1);

    //Prepare the statement
    $prep = $pdo->prepare("SELECT *
    FROM movies
    WHERE length > ?
    AND director_id = ?");

    /* This way of preparing also works with named placeholders
    $data = array('length' => $length, 'id' => 1);
    $prep = $pdo->prepare("SELECT *
    FROM movies
    WHERE length > :length
    AND director_id = :id");
    */

    //Execute the prepared statement
    $prep->execute($data);

    // Fetch the results
    $movies = $prep->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    var_dump($movies);
    echo "</pre>";

    // Close the connection
    $pdo = null;
}
?>

<form method="post">
    <input type="number" name="length">
    <input type="submit" value="Submit" name="submitBtn">
</form>