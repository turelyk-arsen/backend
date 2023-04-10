<?php
// Create a function to convert a price in euro to Japanese yen OR a price in Japanese yen to euro.
// This function has 2 arguments:
// ● The price (int type or float type)
// ● The currency of the price (EUR or JPY).
// If the second parameter is ‘JPY’, the function needs to convert the price to ‘EUR’.
// If the second parameter is ‘EUR’, the function needs to convert the price to ‘JPY’.
// You have to display the result.
// Reminder : 1 EUR = 138.20 JPY
// You also have to perform the necessary verifications in order to validate the arguments.

function convertPrice($price, $currency)
{
    $rate = 138.2;
    if (is_numeric($price) || is_float($price)) {
        if ($currency == 'JPY') {
            $result = $price / $rate;
            echo "Your $price in $currency is $result in EUR";
        } else if ($currency == 'EUR') {
            $result = $price * $rate;
            echo "Your $price in $currency is $result in JPY";
        } else {
            echo "Your price must be a number and your currence must be JPY or EUR";
        }
    } else
    echo "Your price must be a number and your currence must be JPY or EUR";

}
convertPrice(3.3, 'EUR');
