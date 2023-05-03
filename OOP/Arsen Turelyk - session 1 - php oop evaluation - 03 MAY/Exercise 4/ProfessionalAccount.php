<?php

require_once 'BankAccount.php';

class ProfessionalAccount extends BankAccount
{
    private $limit;

    public function __construct($newAccountNumber, $newAmount, $newLimit)
    {
        parent::__construct($newAccountNumber, $newAmount);
        $this->limit = $newLimit;
    }

    public function withdrawWithLimit($withDrawAmount)
    {
        $newAmount = $this->amount - $withDrawAmount;

        if ($newAmount >= -$this->limit) {
            echo "You have $this->amount enough money on your bank account. Account balance is $newAmount. Your limit is $this->limit";
            $this->amount = $newAmount;
        } else
            echo "You do not have enough money on your bank account";
    }
}
