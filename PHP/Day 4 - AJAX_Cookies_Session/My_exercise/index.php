<?php
require __DIR__.'/auth.php';
$login = getUserLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
</head>
<body>
    
<?php if ($login === null): ?>
<a href="login.php">LogIN</a>

<?php else:  ?>
    Welcome! <?= $login ?> <br>
<a href="logout.php">LogOUT</a>
<?php endif; ?>


</body>
</html>