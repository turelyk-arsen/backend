<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1Root2Arsen!";
$BDname = "bd_blog";

$mysqli = new mysqli($servername, $username, $password, $BDname);

if ($mysqli -> connect_error) {
    printf("NOT connected: %s\n", $mysqli -> connect_error);
    exit();
};