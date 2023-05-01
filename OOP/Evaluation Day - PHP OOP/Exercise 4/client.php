<?php

require_once 'BankAccount.php';
require_once 'SavingAccount.php';
require_once 'ProfessionalAccount.php';

$simonAccount = new SavingAccount('Z98az908', 200, 0.012);
echo 'Total interest : ' . $simonAccount->total_interest() . '<br>';

$andreAccount = new ProfessionalAccount('ZAZ98782', 1000, 500);
for ($i = 0; $i < 10; $i++) {
    $random = rand(0, 400);
    $andreAccount->withdraw($random);
}