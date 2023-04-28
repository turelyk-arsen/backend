<?php

/*

    Create a Utility class.

    This class will be used to display a Log message like this one : '2021-04-26 14:00:03 - Accessing file';

    Create a static function in the class to match the instructions.
    Everytime this method is called, you will append the log in a file (dont overwrite it).
  
  	You should be able to call this method anytime, without instanciate the class.

    Create a client.php. Each time you're going to 'client.php', it should save log in the file.
  
*/
class Unility
{

  public static function logMessage()
  {
    $message = date("Y-m-d h:i:sa") . " - Accessing file \r\n";
    return $message;
  }

  public static function appendLog()
  {
    $myfile = fopen("testfile.txt", "a");
    $txt =self::logMessage();
    fwrite($myfile, $txt);
    fclose($myfile);
  }
}

$myClass = new Unility();
echo $myClass->logMessage();

Unility::appendLog();
