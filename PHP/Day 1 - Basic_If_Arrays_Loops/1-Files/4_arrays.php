<?php
// initialize arrays
$movies = array();
$movies = [];

// array with values
// $movies = array (
//     0 => 'NightCrawlers',
//     1 => 'Chinatown',
//     2 => 'Avatar'
// )

$movies = array(
    'NightCrawlers',
    'Chinatown',
    'Avatar'
);
$movies = [
    'NightCrawlers',
    'Chinatown',
    'Avatar'
];

// access an element of the array
echo $movies[1];

// override the last movie
$movies[2] = 'Titanic';
echo $movies;

// create a new movie at the end
$movies[] = 'Avatar';

echo '<br>';
// remove an element 
unset($movies[2]);

// show 
var_dump($movies);

echo '<pre>';
var_dump($movies);
echo '<pre>';

// associative arrays
$simonInformation = [
    'firstname' => 'Simon',
    'lastname' => 'Bertrand',
    'phone' => '+336123456789',
    'mail' => 'simone@bertrand.fr'
];

//access an element
echo $simonInformation['phone'];

// change the phone number
$simonInformation['phone'] = '035266156245957';
$simonInformation['age'] = 30;


echo '<pre>';
var_dump($simonInformation);
echo '<pre>';

$contacts = [
    0 => [
        'firstname' => 'Simon',
        'lastname' => 'Bertrand',
        'phone' => '+336123456789',
        'mail' => 'simone@bertrand.fr'
    ],
    1 => [
        'firstname' => 'Martine',
        'lastname' => 'Dupont',
        'phone' => '+3361987565432',
        'mail' => 'martine@bertrand.fr'
    ]
];
echo $contacts[0]['phone'];

