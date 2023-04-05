<?php
session_start();

echo "<h1> Hello ". $_SESSION["firstname"]. " you are register!!! </h1>";

?>
<form action="register.php">
    <input type="submit" value="Register page" >
</form>