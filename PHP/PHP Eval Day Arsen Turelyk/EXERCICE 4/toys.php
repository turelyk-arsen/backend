<?php
// conect to your db
$conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'christmas_shop');
if (mysqli_connect_errno())
    die("You can not connect to the server. " . mysqli_connect_errno() . "\n");
// make a query
$query = "SELECT * FROM toys";
$result = mysqli_query($conn, $query);
$toys = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Toys List</h1>

    <!-- show the array toys about all toy in your database -->
    <?php foreach ($toys as $key => $toy) : ?>

        <p>Name of the toys:
            <strong><?= strtoupper($toy['name']); ?> </strong>
        </p>

        <p>Price of the toys:
            <strong><?= strtoupper($toy['price']) . ' €'; ?> </strong>
        </p>

        <img src="<?= $toy['photo']; ?>" width="200px">

        <p>Description of the toys:
            <?= substr($toy['description'], 0, 30) . '...'; ?>
        </p>
        <a href="./details.php?id=<?= $toy['id']; ?>">Detail page</a>
        <hr>
    <?php endforeach; ?>
</body>

</html>