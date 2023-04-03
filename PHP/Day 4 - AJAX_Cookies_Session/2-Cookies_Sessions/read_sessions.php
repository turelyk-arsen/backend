<?php

session_start();
setcookie('username', 'gabriel', time() + 100);

print_r($_COOKIE);
print_r($_SESSION);