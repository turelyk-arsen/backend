<?php
$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'christmas_shop');
if (mysqli_connect_errno())
    die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

$query = "SELECT * FROM toys WHERE id = $id";
$result = mysqli_query($conn, $query);
$toys = mysqli_fetch_assoc($result);

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys</title>
</head>

<body>
    <h1>Toys № <?= $toys['id']; ?></h1>

    <p>Name of the toys:
        <strong><?= strtoupper($toys['name']); ?> </strong>
    </p>

    <p>Price of the toys:
        <strong><?= strtoupper($toys['price']) . ' €'; ?> </strong>
    </p>

    <img src="<?= $toys['photo']; ?>" width="200px">

    <p>Description of the toys:
        <?= $toys['description']; ?>
    </p>
    <hr>
</body>

</html>