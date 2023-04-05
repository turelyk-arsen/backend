<form action="" method='post'>
    <input type="password" name="password">
    <input type="submit" name="submitBtn" value="TRY">
</form>

<?php
$hash_password = '$2y$10$8cCrQWLZTReRGq9/IbQ7s.RSQb8yCyMT2JFba0aMrp1yho7eRHFYi';

// check if password match
if(isset($_POST['submitBtn'])) {
    if (password_verify($_POST['password'], $hash_password)) {
            echo 'Password matches';
    } else {
        echo 'Password wrong';
    }
} 
?>