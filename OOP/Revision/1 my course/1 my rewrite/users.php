<?php

require_once 'Login/User.php';

use Login\User;

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
        <?php foreach ($users as $key => $user) : ?>
            <tr>
                <td><?php echo $user->id; ?></td>
                <td><?php echo $user->username; ?></td>
                <td><?php echo $user->email; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>