<?php 
include_once "./templates/generation.php";

$id_topic = $_REQUEST['id_topic'];
// $title = $_REQUEST['title'];
// $text = $_REQUEST['text'];
// $id_topic = $_GET['id_topic'];

function send_article($mysqli, $title, $text, $id_topic)
{
    $sql = "INSERT INTO `articles` (title, text, id_topic, views, date)
     VALUES ('$title', '$text', '$id_topic', 0, CURRENT_TIMESTAMP)";
    $mysqli->query($sql);
    echo '<script>location.replace("http://localhost/backend/PHP/Project%20Individual%20Day/blog_PHP/topic.php?id_topic=' . $id_topic . '");</script>';
    exit;
}

if (isset($_REQUEST['doGoArticle']) === true) {
    send_article($mysqli, $_REQUEST['title'], $_REQUEST['text'], $id_topic);
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Categories</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 </head>
 <body>
     <?php 
     generation_head_menu($mysqli);
     ?>
     <div class="container">
        <?php 
            generation_posts_topic($mysqli, $id_topic);
        ?>
    </div>

    <div class="comments container">
        <hr>
        <h2>Add new article:</h2>
        <form action="<?= $_SERVER["SCRIPT_NAME"] ?>">
            <input name="title" type="text" placeholder="Title" style="width:800px; height:30px;"> <br> <br>
            <textarea name="text" id="" style="width:800px; height:100px;" placeholder="Article"></textarea>
            <input type="hidden" name="id_topic" value="<?php echo $id_topic ?>"> <br>
            <input name="doGoArticle" type="submit" value="Send">
        </form>
        <hr>

        <?php
        // generation_comment($mysqli, $id_article);
        ?>
    </div>

 </body>
 </html>