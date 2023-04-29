<?php

class ProfessionalAccount extends BankAccount
{
    private $limit;

    public function __construct($newLimit, $newAmount, $newAccNumber)
    {
        $this->limit = $newLimit;
        parent::__construct($newAccNumber, $newAmount);
    }

    public function withDrawMy($remove)
    {
        $newAmount = $this->amount - $remove;
        if ($newAmount <= 0) {
            echo 'Your limit' . $this->limit . 'and your amount is less than 0';
            if ($newAmount >= $this->limit) {
                $rest = $newAmount - $this->limit;
                echo 'You can withdraw'.$remove.'and left'.$rest;
            } else {
                echo 'Your limit is too small to withdraw'.$remove;
            }
        } else {
            echo 'You have limit'.$this->limit.'and rest'.$newAmount;
        }
    }

    public function withdraw($removeAmount)
    {
        $newAmount = $this->amount - $removeAmount;
        if ($newAmount < -$this->limit)
            echo 'Not enough monney on your account.<br>';
        else {
            $this->amount = $newAmount;
            echo "You withdraw $removeAmount € / Left : $this->amount €<br>";
        }
    }
}
