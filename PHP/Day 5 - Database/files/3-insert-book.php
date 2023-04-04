<?php

// 1. Connect the DB
$localhostServer = '127.0.0.1';
$conn = mysqli_connect($localhostServer, 'root', '1Root2Arsen!', 'library_php');

if ($conn) {
    echo "Connected Successfully <br>";

    $query = "INSERT INTO books (author_id, title, publication_date, price) VALUES
    (1, 'Lord of the rings', '1954-01-01', 14)";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'Successfully INSERT <br>';
    } else {
        echo 'Problem ALARM not INSERT in DB <br>';
    }

    mysqli_close($conn);
} else {
    echo "Access denied, Danger, this machine will expode in 5...4...3...22 BOOM!";
}
