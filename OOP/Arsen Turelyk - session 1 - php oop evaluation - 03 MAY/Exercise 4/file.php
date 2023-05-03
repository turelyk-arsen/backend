<?php

require_once 'BankAccount.php';
require_once 'SavingAccount.php';
require_once 'ProfessionalAccount.php';

// create a new client with ProfessionalAccount
$newBankProfessionalClient = new ProfessionalAccount(12345, 1000, 500);
print_r($newBankProfessionalClient);
echo '<br>';
echo $newBankProfessionalClient->getAmount();
echo '<br>';
echo $newBankProfessionalClient->getAccountNumber();
echo '<hr>';
for ($x = 1; $x <= 6; $x++) {
    $amount = 300;
    echo $newBankProfessionalClient->withdrawWithLimit($amount) . '<br>';
}

// create a new client with SavingAccount
$newClient = new SavingAccount(54321, 500, 0.1);
print_r($newClient);
echo '<br>';
echo $newClient->getAmount();
echo '<br>';
echo $newClient->getAccountNumber();
echo '<hr>';
for ($x = 1; $x <= 5; $x++) {
    $amount = 100;
    echo $newClient->withdraw($amount) . '<br>';
}
