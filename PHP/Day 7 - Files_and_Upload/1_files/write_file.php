<?php
// code to show error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//end

// in write mode, if the file does not exist, it will try to create it
// Two modes: 'w' override the content of the file, 'a' to append

$file_handle = fopen('myFile.txt', 'a');

// Write inside the file
fwrite($file_handle, "I need 2 beer. \r\n");
// fwrite($file_handle, "I need a beer. \r\n");
// \r = return
// \n line feed
// go to new line and feed it

fclose($file_handle);

echo 'file is created and alive! ';
