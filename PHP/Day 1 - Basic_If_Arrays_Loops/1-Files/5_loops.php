<?php
// loops

//1. for ... loop
$number = 10;

// $number = [
//     'first one',
//     'second one',
//     'third one'
// ];

for ($i = 0; $i < $number; $i++) {
    echo $i . '<br>';
};

// for loop is used to execute code a specific number of times

// 2. WHILE
$a = 0;
while($a < 10) {
    $a++;
};

// while loop is used to execute code as long as a condition is true

// 3. Do ... while
$a = 10;
do {
    $a++;
} while($a < 10);
// do while is used to execute code at least once, 
// then the rest depends on the condition

// 4. foreach
$movies = [
    'NightCrowaler',
    'Chinatown',
    'Avatar'
];
// use foreach when you want to loop through an array
// foreach provides the current $key and %value

foreach($movies as $key => $value) {
echo "Position/Index: $key / Value: $value <br>" ;
};

// you can grab the value only
foreach ($movies as $title) {
    echo "Title: $title <br>";
};
