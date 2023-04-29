<?php require_once '1.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cat list</h2>

    <?php
    $arraycats = array (
        $myCat = new Cat('Fofo', 5, 'brown', 'male', 'Goos'),
        $myCat1 = new Cat('Dofo', 8, 'white', 'male', 'Tiger'),
        $myCat2 = new Cat('Fofo', 9, 'brown', 'female', 'Somth')
    );

    echo "Here is my list of cats: <hr>";
    echo $myCat;
    echo $myCat1;
    echo $myCat2;
    echo "<hr>";

    foreach ($arraycats as $key => $value) {
        foreach ($value->getInfos() as $subvalue) {
            echo $subvalue.'<hr>';
        }
    }

    foreach ($myCat->getInfos() as $value) {
        echo $value.'<br>';
    }
    ?>
</body>
</html>