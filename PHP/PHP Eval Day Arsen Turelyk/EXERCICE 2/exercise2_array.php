<?php

$celebrities = array(
    "Jeff Bezos" => array(
        "houses" => 15,
        "credit" => 8100140042,
        "debit" => 2123177
    ),
    "Dwayne Johnson" => array(
        "houses" => 21,
        "credit" => 871399200,
        "debit" => 9837123
    ),
    "Kylie Jenner" => array(
        "houses" => 5,
        "credit" => 55140042,
        "debit" => 55140040
    ),
    "PHP Simon" => array(
        "houses" => 0,
        "credit" => 200,
        "debit" => 1800
    )
);

//krsort() - sort associative arrays in descending order, according to the key
krsort($celebrities);
$balance_max = 0;
$balance = 0;

foreach ($celebrities as $key => $value) {
    // find the celebrity with the largest bank balance
    $balance = $value['credit'] - $value['debit'];

    if ($balance > $balance_max)
        $balance_max = $balance;

    if ($balance < 0) {
        echo '<p style="color: red;">' . $key . ' owns ' . $value['houses'] . ' houses and has a bank balance of ' . $balance . ' $.</p>';
    } else if ($balance_max != $balance) {
        echo '<p><b>' . $key . ' owns ' . $value['houses'] . ' houses and has a bank balance of ' . $balance . ' $.<b></p>';
    } else {
        echo '<p>' . $key . ' owns ' . $value['houses'] . ' houses and has a bank balance of ' . $balance_max . ' $.</p>';
    }
}



// We have gathered information about some celebrities. We managed to retrieve their bank account information among other things.You can find that information in the ‘exercise2_array.php’ file. 

//Given this information, write a PHP script that displays the celebrity name AND the number of
// houses for each person, as well as the bank account balance (credit - debit).

// If the bank account balance is below 0, display it in red.

// This list should be displayed in descending alphabetical order (based on the name).

// **Example :**

// 'Dwayne Johnson owns 21 houses and has a bank balance of 871399200 $'

// 'Kylie Jenner own 5 houses and has a bank balance of -15000 $'

// 'Jeff Bezos own 15 houses and has a bank balance of 812014041 $'

// **Bonus :**

// Display the celebrity with the largest bank balance in bold.
