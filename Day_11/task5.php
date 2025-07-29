<?php
class BankAccount
{
    private $balance = 1000;
    public function withd($amount)
    {
        if ($amount <= 0) {
            echo "amount must be positive.<br>";
        } elseif ($amount > $this->balance) {
            echo "Cannot withdraw this $amount because it is bigger than balance.<br>";
        } else {
            $this->balance -= $amount;
            echo "Withdrawn: $amount<br>";
        }
    }
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }

    public function getBalance()
    {
        echo "Balance is :$this->balance ";
    }
}

$try = new BankAccount;
$try->withd(40);
$try->deposit(60);
$try->getBalance();