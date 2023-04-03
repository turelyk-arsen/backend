<?php

if(!isset($_COOKIE)) 
  echo "You have not visited the create-cookie page";
else {
      echo "You have visited the page. create-cookie <br>";
      print_r($_COOKIE);
}
