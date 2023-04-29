<?php
class HtmlString {
    private $string;

    public function __construct($string) {
        $this->setString($string);
    }

    public function setString($newString) {
        if(is_string($newString))
        $this->string = $newString;
        else
        echo "Must be a string";
    }
    public function getString() {
        return $this->string;
    }

    public function getBoldString() {
        return "<b>$this->string</b>";
    }
    public function getItalicString() {
        return "<em>$this->string</em>";
    }
}
// Part 1 : 

// Design an HtmlString class.

//   It is intended to display bold and / or italic text.

// This class have only one property : $string

//   It will have the following methods:

//   - setString ($string)
//   Sets the string

//   - getString ()
//   Get the string

//   - getBoldString()
//   Get a bold version of the string

//   - getItalicString ()
//   Get an italic version of the string

//   - getItalicBoldString ()
//   Get a bold italic version of the string

//   Be careful, put the class declaration in a separate file!

// Use Example :
// */

//require_once 'Solutions/HtmlString.php';