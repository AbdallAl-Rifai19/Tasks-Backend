<?php

class Account {
    private string $id;
    private string $name;
    private int $balance = 0;

    // Constructors
    public function __construct($id, $name, $balance = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    // Methods
    public function credit($amount) {
        $this->balance += $amount;
        return $this->balance;
    }

    public function debit($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Amount exceeded balance\n";
        }
        return $this->balance;
    }

    public function transferTo($anotherAccount, $amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $anotherAccount->credit($amount);
        } else {
            echo "Amount exceeded balance\n";
        }
        return $this->balance;
    }

    // toString method alternative
    public function getDescription() {
        return "Account[id=" . $this->id . ", name=" . $this->name . ", balance=" . $this->balance . "]";
    }
}


$account1 = new Account("A001", "Mohamed", 1000);
$account2 = new Account("A002", "Ali", 500);


echo $account1->getId(); 
echo "<br>";

echo $account1->getName();
echo "<br>";

echo $account1->getBalance(); 
echo "<br>";

$account1->transferTo($account2, 300);

echo $account1->getBalance(); 
echo "<br>";

echo $account2->getBalance(); 
echo "<br>";

echo $account1->getDescription(); 
echo "<br>";

echo $account2->getDescription(); 






?>
