<?php

class BankAccount
{
    // I change private (As part of the site redesign, you must create a BankAccount class which will have the following private properties:
    // - an account number (int) - an amount (int)) to protected because protected - the property or method can be accessed within the class and by classes derived from that class

    protected $accountNumber;
    protected $amount;

    public function __construct($newAccountNumber, $newAmount)
    {
        $this->setAccountNumber($newAccountNumber);
        $this->setAmount($newAmount);
    }

    public function setAccountNumber($newAccountNumber)
    {
        if (is_numeric($newAccountNumber))
            $this->accountNumber = $newAccountNumber;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setAmount($newAmount)
    {
        if (is_numeric($newAmount))
            $this->amount = $newAmount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function withdraw($withDrawAmount)
    {
        $newAmount = $this->amount - $withDrawAmount;
        if ($newAmount > 0) {
            echo "You have $this->amount enough money on your bank account. Account balance is $newAmount";
            $this->amount = $newAmount;
        } else
            echo "You do not have enough money on your bank account";
    }

    public function deposit($addAmount)
    {
        return $this->amount += $addAmount;
    }
}
