<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;

        }
    </style>
</head>

<body>

    <?php
    $array_assoc = [
        'T-Shirts' => 20,
        'Caps' => 10,
        'Shoes' => 5
    ];

    echo $array_assoc['Caps'];
    /* 
- Exercise 1

-- Create an associative array that contains the number in stock for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.

- Exercise 2

Based on the previous variables you created.
The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/

    ?>
    <p>exercise 1</p>
    <h1>Caps in stock: <?php echo $array_assoc['Caps'] ?> </h1>

    <p>exercise 2</p>
    <?php
    $caps = $array_assoc['Caps'];
    $array_assoc['Caps'] = $caps + 5;
    // $array_assoc['Caps'] += 5;

    $Shoes = $array_assoc['Caps'];
    $array_assoc['Shoes'] = $Shoes + 20;
    // $array_assoc['Shoes'] += 20;
    ?>
    <h1>Caps in stock: <?php echo $array_assoc['Caps'] ?> </h1>
    <h1>Shoes in stock: <?php echo $array_assoc['Shoes'] ?> </h1>


</body>

</html>