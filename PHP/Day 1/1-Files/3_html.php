<?php
$firstName = 'Simon';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML example</title>
    <style>
        body {
            background-color: rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Link 1</li>
            <li>Link 2</li>
        </ul>
    </nav>
    <h1>HTML / PHP Page</h1>

    <?php
     echo 'Hello, '.$firstName;
    ?>
</body>

</html>