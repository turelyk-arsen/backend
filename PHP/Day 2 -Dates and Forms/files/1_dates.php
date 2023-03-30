<?php
// Set the time
date_default_timezone_set('Europe/Luxembourg');

// Timestamps 
// number of seconds between a specific date and the 1th january 1970

// https://www.epochconverter.com/
// today date: 30 march 2023 9:30
// todays timestamps : 1680168643

// Display a date in a nice format : date() function
echo date('d/m/Y').'<br>';
echo date('d-m-Y').'<br>';
echo date('d m Y').'<br>';
echo date('Y m d').'<br>';

// Day's number
echo date('d').'<br>';

// Return today month number
echo date('m').'<br>';
echo date('M').'<br>';

// with hours/minutes/seconds
echo date('d/m/Y H:i:s').'<br>';

// another date
echo date('d/m/Y H:i:s', 16012124378).'<br>';

// retrieve / convert a date, or a string, into a timestamp
echo strtotime('now').'<br>';
echo strtotime('next Saturday').'<br>';
echo strtotime('yesterday').'<br>';
echo strtotime('+2 days').'<br><br>';
echo strtotime('02 September 1983').'<br>';

//Mix the two function
echo date('d/m/Y H:i:s', strtotime('+3 days')).'<br>';


?>