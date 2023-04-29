<?php

// 3. Create a new PHP file called "users.php" that 
// will display all the users in a table.

require_once 'User.php';
$users = User::getAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h2>A basic USERS table</h2>
    <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>    
             <?php foreach ($users as $key => $value) : ?>
            <tr>
                <td><? echo $value->id; ?></td>
                <td><? echo $value->username; ?></td>
                <td><? echo $value['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>