<?php

// - **EXERCICE 3 : “Arrays Multiply”**
//     Given 2 arrays of the same length, create a PHP function that will create a new array and return it.
//     This new array will be the multiplication of the elements of the two original arrays.
//     **Example :**
//     Inputs :
//     $tab1 = array(9, 20, 10, 3, 25, 2, 4);
//     $tab2 = array(2, 5, 13, 3, 1, 11, 7);
//     Output :
//     $resultat = array(18, 100, 130, 9, 25, 22, 28);
//     This function has 2 arguments:
//     - The first array (array type)
//     - The second array (array type)
//     You also have to perform the necessary verifications in order to validate the arguments !

$tab1 = array(9, 20, 10, 3, 25, 2, 4);
$tab2 = array(2, 5, 13, 3, 1, 11, 7);

function createNewArray($tab1, $tab2)
{
    $resultat = [];

    if (is_array($tab1) && is_array($tab2)) {
        if (count($tab1) == count($tab2)) {
            for ($i = 0; $i < count($tab1); $i++) {
                if (is_numeric($tab1[$i]) && is_numeric($tab2[$i])) {
                    $resultat[$i] = $tab1[$i] * $tab2[$i];
                } else {
                    echo 'Each number must be the number';
                }
            }
            return print_r($resultat);
        } else
            echo 'Both arrays must have the same length';
    } else
        echo 'Both inputs must be arrays';
}
createNewArray($tab1, $tab2);
