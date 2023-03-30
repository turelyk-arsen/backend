<?php
// if syntax
$a = 5;
// $a = -5;
// $a = 6;

if($a==6) {
    echo 'Equal to 6!';
} else if ($a<0) {
    echo 'Negative number!';
} else {
    echo 'Not equal to 6. Not a negative number.';
}

// if you have only ONE instruction IF, you can do this;
if($a==6) 
    echo 'Equal to 6!';
 else if ($a<0) 
    echo 'Negative number!';
 else 
    echo 'Not equal to 6. Not a negative number.';

// 2. Compare operator
$a = 2;
$b = '2';

// same value
if($a == $b) //return true

// same value & type
if($a === $b) //return false

//not equal
if($a != $b) //return false

// not same value OR not same type
if($a !== $b) //return true

//greater / lower than
if($a < $b) // lower than
if($a > $b) //greater than
if($a <= $b) // lower or equal than
if($a >= $b) // greater or equal than

//3. logical operator

//AND &&
if($a == 5 && $b == 6)
if($a == 5 AND $b == 6)

// OR ||
if($a == 5 || $b == 6)
if($a == 5 OR $b == 6)

// 4. Ternary IF
echo ($a == 5) ? 'equal' : 'not equal';
?>