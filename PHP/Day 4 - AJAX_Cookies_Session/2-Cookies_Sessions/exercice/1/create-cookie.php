<?php
setcookie('view', 'true', time() +60);
echo "cookie created<br>";
print_r($_COOKIE);