<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song View page</title>
</head>

<body>
    <h2>Songs List</h2>

    <?php
    $songs = find_all();
    foreach ($songs as $s) {
        echo 'Title : ' . $s['title'] . '<br>';
        echo 'Date : ' . $s['release_date'] . '<br>';
        echo '<hr>';
    }
    ?>
</body>

</html>