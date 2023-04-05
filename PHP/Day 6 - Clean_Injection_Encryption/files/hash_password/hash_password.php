<form action="" method="post">
    <input type="password" name="password"> <br>
    <input type="submit" name="submitBtn" value='try'> <br>
</form>

<?php
// hash the password
// it is necessary to hash your password BEFORE saving into the DB.
// Hash the password makes it unreadable by humans

if (isset($_POST['submitBtn'])) {
    // Display the password
    echo $_POST['password'].'<br>';

    // DO NOT USE THOSE FUNCTION (weak/old algorythm)
    // md5($_POST['password'])
    // sha1($_POST['password'])

    // Password hash function will hash your password using bcrypt() algorithm
    echo password_hash($_POST['password'], PASSWORD_DEFAULT);
    // it generate 60 char long string
    
}
?>