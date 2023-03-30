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
        $image = 'https://picsum.photos/200/300';
        $firstName = 'JOHN';
        $lastName = 'DOE';
        $atack_points = 12;
        $defense_points = 1;

        $new_array = [
                'atack_points' => 0,
                'defense_points' => 0,
        ];



        $new_array['atack_points'] = $atack_points;
        $new_array['defense_points'] = $defense_points;

        echo '<pre>';
        echo var_dump($new_array);
        echo '<pre>';

        foreach ($new_array as $key => $value) {
                echo "<h2> $key : value $value <h2>";
        }


        $characteristics = [
                'atack_points' => 10,
                'defense_points' => 5,
                'magic_points' => 100,
                'health' => 500,
        ];
        /*

-- Character Exercise

We will continue the 'Character' exercise.

Instead of attack and defense point variables, you need to replace those with an array :
        -- An array of characteristics (attak point, defense point... put anything you want)
        Use an associative array.

You have to use a loop to display all the characteristics now !
*/
        ?>
        <img src="<?php echo $image ?>">
        <h2><?php echo "$firstName $lastName"; ?></h2>
        <?php
        foreach ($characteristics as $key => $value) {
                echo "$key : $value <br>";
        };
        ?>

</body>

</html>