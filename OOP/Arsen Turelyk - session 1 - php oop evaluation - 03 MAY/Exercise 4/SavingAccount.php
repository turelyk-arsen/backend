<?php

require_once 'BankAccount.php';

class SavingAccount extends BankAccount
{
    private $interest;

    public function __construct($newAccountNumber, $newAmount, $newInterest)
    {
        parent::__construct($newAccountNumber, $newAmount);
        $this->interest = $newInterest;
    }

    public function retrieveInterest()
    {
        return $this->interest * $this->amount;
    }
}
