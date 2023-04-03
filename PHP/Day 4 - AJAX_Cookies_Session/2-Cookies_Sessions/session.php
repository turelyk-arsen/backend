<?php

// 1.you need to start the session()
// 2. if it's the first time, the server creates a new session just for you
// (and gives the key)
// If you already opened a session before, it will try to open the previous one
// (if you have the key)

//First thing to do (BEFORE ANE HTML TAG)
session_start();

//Add an element to the session
$_SESSION['carte'] = 'Tshirt';

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

print_r($_SESSION);

//Remove an element to the session
// unset($_SESSION['carte']);
session_unset('carte');
