<?php
// String functions
$myString = 'Here, take a beer';

// Find the position of a word (substring) in a string
echo $myString.'<br>';
echo strpos($myString, 'beer').'<br>';

// Replace a word in a string
echo str_replace('beer', 'coca-cola!', $myString).'<br>';
echo $myString.'<br>';
var_dump($myString);
echo '<br><br>';

// Substring : Retrieve on part of a string
echo substr($myString, 6).'<br>';
echo substr($myString, 6, 4).'<br>';

$lorem = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";
echo substr($lorem, 0, 30).'...';




?>