<?php

require_once 'Post.php';

if (isset($_POST['submitBtn'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    try {
        Post::createPost($title, $content);
        echo "Creation successful !";
    } catch (\StringIsEmptyOrNull $e) {
        echo $e->getMessage();
    } catch (\Exception $e) {
        echo "Something did not go as planned...<br>";
        echo $e;
    }
}
?>

<form method="post">
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit" value="Submit" name="submitBtn">
</form>

<?php
echo "<pre>";
echo Post::getPosts();
echo "<pre>";
?>