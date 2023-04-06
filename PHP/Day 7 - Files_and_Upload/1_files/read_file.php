<?php

// Read a file(but no control)
// $file_content = readfile('movies.txt');
// echo $file_content;

//Another function to read a file (but no control)
// $file_content = file_get_contents('movies.txt');
// echo $file_content;

// check if a file exists
if (file_exists('movies.txt')) {
    // echo 'File is alive';

    // Open the file (mode > r : read, w : write, a : append)
    $file_handle = fopen('movies.txt', 'r');
    // fopen()  -   used to open the file with the specific mode

    // Read the file
    while(!feof($file_handle)) {
     // why '!'
     // if we use the condition while (foef($file_handle)), the loop will keep
     // executing until the end of the file is reached.
     // which means that the last line of the file will not be processed.
     // the ! operator is used to ensure that the while loop
     // process ALL the lines of the file until the end of the file is reached.

     // Retrieve the current line
     $current_line = fgets($file_handle);
     echo "<p> $current_line </p>";
     // fgets() reads a single line of file and returns it as a string
    }

    // close the file
    fclose($file_handle);
} else {
    echo 'File does not exist';
}