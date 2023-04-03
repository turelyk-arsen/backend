<?php
//Read the cookie
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

// create two cookies
// setcookie("username", "mako", time() + 20); //username = name, value = mako, 
// time() +20, sets the cookie to expire in 20 sec
// setcookie('username', 'simon', time() + 60);
// setcookie('username', 'gabriel', time() - 1);
setcookie('username', 'gabriel', time() + 100);
