<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Ex 1</title>
</head>
<body>

<?php

    $avatar = 'banana.png';
    $firstName = 'Banana';
    $lastName = 'Guy';

    $characteristics = [
        'atkPoints' => 10,
        'defPoints' => 5,
        'magicPoints' => 100,
        'healthPoints' => 500
    ];

    ?>

    <img src="<?php echo $avatar; ?>" width="100px">
    <h2><?php echo "$firstName $lastName"; ?></h2>
    
    <?php
        foreach($characteristics as $key => $value){
            echo "$key : $value <br>";
         
        };

       
    ?>

</body>
</html>