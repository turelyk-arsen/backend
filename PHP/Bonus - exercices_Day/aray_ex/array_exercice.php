<?php
/*
You are a PHP developer for a real estate company. 
Your manager has provided you with an array of properties with their respective details.

You can find that information in the ‘my_array.php’ file.

Given this information, write a PHP script that displays the property type AND the number of units available for each property, as well as the total value of all units combined.

If the total value of a property is above $1,000,000, display it in bold.

This list should be displayed in descending order based on the number of units available for each property.
*/


$properties = array(
    array(
        'type' => 'Apartment',
        'units' => 25,
        'value' => 750000
    ),
    array(
        'type' => 'Townhouse',
        'units' => 15,
        'value' => 1200000
    ),
    array(
        'type' => 'Condominium',
        'units' => 10,
        'value' => 500000
    ),
      array(
        'type' => 'Commercial Building',
        'units' => 1,
        'value' => 5000000
    ),  
    array(
        'type' => 'Single Family Home',
        'units' => 5,
        'value' => 2500000
    ),

);
// asort($properties);
usort($properties, function($a, $b) {
    return $b['units'] - $a['units'];
});

foreach ($properties as $key => $value) {

//    echo 'The property type is: '.$value['type']. 'the number of units '.$value['units']. ' the total value of all units '. $value['value']*$value['units'].'<br>' ;

   $total_value = $value['value']*$value['units'];
   $type = $value['type'];
   if ($total_value > 1000000) {
    $show = "<b> $type </b>";
    echo 'The property type is: '.$show. 'the number of units '.$value['units']. ' the total value of all units '. $total_value.'<br>' ;
   }

}