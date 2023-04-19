<?php

class Unility
{

    public static function appendLog()
    {
        $myfile = fopen("logfile.txt", "a");
        $message = date("Y-m-d h:i:sa") . " - Accessing file \r\n";
        fwrite($myfile, $message);

        $file = file("count.txt");
        $count = implode("", $file);
        $count++;
        $myfile = fopen("count.txt", "w");
        fputs($myfile, $count);

        fclose($myfile);
        echo $message . $count . '<br>';
    }
}

Unility::appendLog();
