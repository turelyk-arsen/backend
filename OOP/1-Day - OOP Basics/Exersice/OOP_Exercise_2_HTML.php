<?php
class HtmlString
{
  private $string;
  
  public function setString($string)
  {
    $this->string = $string;
  }
  public function getString($string)
  {
    return $this->string;
  }

  public function getBoldString()
  {
    return '<b>' . $this->string . '</b>';
  }

  public function getItalicString()
  {
    return '<i>' . $this->string . '</i>';
  }
  public function getItalicBoldString()
  {
    return '<i><b>(' . $this->string . ')</b></i>';
  }
}
/*
  Part 1 : 

  Design an HtmlString class.

  It is intended to display bold and / or italic text.

  This class have only one property : $string

  It will have the following methods:

  - setString ($string)
  Sets the string

  - getString ()
  Get the string

  - getBoldString()
  Get a bold version of the string

  - getItalicString ()
  Get an italic version of the string

  - getItalicBoldString ()
  Get a bold italic version of the string

  Be careful, put the class declaration in a separate file!

  Use Example :
 */

//require_once 'Solutions/HtmlString.php';

$markup = new HtmlString();
$markup->setString('My strinnng');
$bold = $markup->getBoldString();
$italic = $markup->getItalicString();
$it_bold = $markup->getItalicBoldString();

echo $bold; 
echo '<br>'; 
echo $italic; 
echo '<br>'; 
echo $it_bold; 

// print_r($markup);
/* Display <b>My strinnnng</b> */

/*
  Part 2 :

  Make it possible to directly create a HtmlString object
  with string in parentheses :

 */

// $markup = new HtmlString('My strinnnnng');
// echo $markup->getBoldString();
