<?php
session_start();

require 'configure.php';

$conn = mysqli_connect($servername, $user_mysql, $password_mysql);

if (mysqli_connect_errno())
    die("You can not connect to the server. " . mysqli_connect_errno(). "\n");

$query_db = "CREATE DATABASE $my_database";
mysqli_query($conn, $query_db);
// echo "Error creating database: " . mysqli_error($conn) . "\n";

mysqli_select_db($conn, $my_database);
// echo "Error selected database: " . mysqli_error($conn) . "\n";

$query_table = "CREATE TABLE users (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        user_pass VARCHAR(100) NOT NULL,
        PRIMARY KEY(id)
    )";

$result_create_table = mysqli_query($conn, $query_table);


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