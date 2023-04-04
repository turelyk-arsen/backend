<?php
// working with database

//1. Connect to the DB
//$conn = mysqli_connect('servername', 'username', 'password', 'name of the DB');

// $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'library' );
$conn = mysqli_connect('127.0.0.1', 'root', '1Root2Arsen!', 'library_php');
//  default localhost is usually ip: 127.0.0.1 sometimes 'localhost' computer 
//don't understand and you must choose to ip

// True if connected, false if not
if($conn) {
    echo "Connected successfully <br>";
    // 2.Prepare the query
    $query = "SELECT * FROM books WHERE id > 10";

    // 3. Ask DB to execute/run the query
    $result = mysqli_query($conn, $query);

    // I retrieve the results but I need to fetch before using them
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($books as $book) {
        echo $book['title'].'<br>';
        echo $book['price'].'<br>';
    }
    // Close the connection;
    mysqli_close($conn);
} else {
    echo "Problem connecting to the DB <br>";
}

