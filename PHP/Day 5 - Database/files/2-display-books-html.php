<?php
// Working with DB
$localhostServer = '127.0.0.1';
$conn = mysqli_connect($localhostServer, 'root', '1Root2Arsen!', 'library_php');

// true if connected and false if not
if ($conn) {
    echo "Connected Successfully <br>";
    $query = "SELECT * FROM  books";
    $result = mysqli_query($conn, $query);

    // I retrieve the results bur I need to fetch before using them
    // 4. Fetch the results as an associative array
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // MYSQLI_ASSOC is a constant that tells the function to return the
    // rows as associative arrays (where the column names are the keys)

    // close the connection
    mysqli_close($conn);
} else {
    echo "Access denied, Danger, this machine will expode in 5...4...3...22 BOOM!";
}
// because we will add html code, we need to close our 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display books in HTML</title>
</head>

<body>
    <h2>Books page</h2>
    <?php
    foreach($books as $book) : ?>
    <p>
        <strong>Title :</strong>
        <?= $book['title']; ?>
    </p>
    <p>
        <strong>Price :</strong>
        <?=  $book['price']; ?>
    </p>
    <hr>
    <?php endforeach; ?>
    
</body>

</html>