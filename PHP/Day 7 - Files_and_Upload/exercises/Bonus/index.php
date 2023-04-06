<?php
session_start();

$servername = 'localhost';
$user_mysql = 'root';
$password_mysql = '1Root2Arsen!';
$conn = mysqli_connect($servername, $user_mysql, $password_mysql);

if (mysqli_connect_errno()) {
    die ("You can not connect to the server. ".mysqli_connect_errno());

    // $query_db = "CREATE DATABASE mydatabase1";
    // $query_table = "CREATE TABLE users (
    //     id int NOT NULL AUTO_INCREMENT,
    //     name VARCHAR(50),
    //     email VARCHAR(100),
    //     user_pass VARCHAR(100),
    //     PRIMARY KEY(id)
    // )";

    // $result1 = mysqli_query($conn, $query_db);
    // $result2 = mysqli_query($conn, $query_table);

}


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create a new database
$sql = "CREATE DATABASE mydatabase";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "\n";
}

// Select the new database
mysqli_select_db($conn, "mydatabase");

// Create a new table for user data
$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    other_column_name VARCHAR(255) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully\n";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}

// Close the MySQL connection
mysqli_close($conn);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <form action="" method='POST' class="row g-3 border border-secondary-subtle bg-light">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="John Dou">
                    <label for="floatingName">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="col-12 mb-2">
                    <button class="btn btn-primary" name='submit' type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>