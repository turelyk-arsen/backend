<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Include a file -> warning if problem
    // Require a file -> stop the script if problem
    require_once 'nav.html';
    ?>

    <h2>Include Page</h2>
    <?php
    $var3 = 'Tiago'; // first we declare the variable
    require_once 'variables.php'; // then we include the php file
    // in another way page doesn't work

    echo $var1 . '<br>';
    ?>
    <?php
    include_once 'movies.txt';
    ?>
    <?php
    include_once 'footer.html';
    ?>

</body>

</html>