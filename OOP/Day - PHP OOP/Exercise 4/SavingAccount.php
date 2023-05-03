<?php

class SavingAccount extends BankAccount {
    private $interest;

    public function __construct($newAccNumber, $newAmount, $newInterest) {
        $this->interest = $newInterest;
        parent::__construct($newAccNumber, $newAmount);
    }

    public function get_interest () {
        return $this->interest;
    }

    public function total_interest () {
        return $this->interest * $this->amount;
    }
}