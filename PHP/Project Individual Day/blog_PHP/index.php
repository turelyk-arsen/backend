<?php
include_once "./templates/generation.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <?php
    generation_head_menu($mysqli);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <?php
                generation_posts_index($mysqli);
                ?>
            </div>
            <div class="col-2">
                <?php
                include 'register.php';
                ?>
            </div>
        </div>
    </div>

</body>

</html>