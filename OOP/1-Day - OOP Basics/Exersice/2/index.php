<?php

require_once 'HtmlString.php';

$myString = new HtmlString('My string !!!');

echo $myString->getBoldString();
echo $myString->getItalicString();