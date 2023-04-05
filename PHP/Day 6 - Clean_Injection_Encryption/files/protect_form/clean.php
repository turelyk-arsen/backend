<?php

//remove whole paces from Left and Right of the input

$email = '             simon@gmail.com    ';
$email = trim($email);

// make sure the email is valid (return )
$clean_email = filter_var($email, FILTER_SANITIZE_EMAIL);
$valid_email = filter_var($clean_email, FILTER_VALIDATE_EMAIL);