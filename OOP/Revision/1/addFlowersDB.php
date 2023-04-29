<?php

// require_once 'index.php';

// if (isset($_POST['submitBtn'])) {
    $errors = array();

    if (empty($_POST['name'])) {
        $errors['name'] = 'Name of the flower is required';
    }

    if (empty($_POST['price'])) {
        $errors['price'] = 'Price of the flower is required';
    }

    if (count($errors) == 0) {
        echo 'Form ok';
        try {
            $conn = new PDO("mysql:host=localhost;dbname=flower_db", 'root', '');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("INSERT INTO flowers (name, price)
    VALUES (?, ?)");
            $stmt->bindParam(1, $_POST['name']);
            $stmt->bindParam(2, $_POST['price']);
            $stmt->execute();

            echo "New record created successfully";

            $last_id = $conn->lastInsertId();
            echo "New record created successfully. Last inserted ID is: " . $last_id;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
// }
