<?php

class BankAccount
{
    protected $accNumber;
    protected $amount;

    public function __construct($newAccNumber, $newAmount)
    {
        $this->set_acc_number($newAccNumber);
        $this->set_amount($newAmount);
    }

    public function set_acc_number($newAccNumber)
    {
        if (is_string($newAccNumber) && strlen($newAccNumber) == 8) {
            $this->accNumber = $newAccNumber;
        } else
            echo "AccNumber must be 8 char long. <br>";
    }

    public function set_amount($newAmount)
    {
        if (is_numeric($newAmount))
            $this->amount = $newAmount;
        else
            echo "Amount must be integer. <br>";
    }

    public function get_acc_number()
    {
        return $this->accNumber;
    }

    public function get_amount()
    {
        return $this->amount;
    }

    public function deposit($addAmount)
    {
        $this->amount += $addAmount;
    }

    public function withdraw($removeAmount)
    {
        $newAmount = $this->amount - $removeAmount;
        if ($newAmount < 0)
            echo 'Not enough monney on your account.<br>';
        else {
            $this->amount  = $newAmount;
            echo "You withdraw $removeAmount € / Left : $this->amount €<br>";
        }
    }
}
