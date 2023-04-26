<?php

require_once 'Login/User.php';

use Login\User;

$users = User::getAll();

foreach ($users as $key => $user) {
    echo 'Id : ' . $user->id . '<br>';
    echo 'Username : ' . $user->username . '<br>';
    echo 'Email : ' . $user->email . '<br>';
    echo 'I should not be showing you this but here is the password : ' . $user->getPassword();
    echo '<hr>';
}