<?php
if(isset($_POST['submitBtn'])) {

    // Original input
    echo $_POST['myInput'].'<br>';

    // htmlspecialchars() convert the HTML tags to entites
    // '<' convert to '$amp;'
    echo htmlspecialchars($_POST['myInput']).'<br>';

    // remove all special characters (html tags)
    echo strip_tags($_POST['myInput']);

}

?>

<form method="post">
    <input type="text" name="myInput" placeholder="Type something">
    <input type="submit" name="submitBtn" value="Try me">
</form>

<!-- <h1>hello world</h1> -->
