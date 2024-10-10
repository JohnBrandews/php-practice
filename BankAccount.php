<?php
class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        if ($initialBalance < 0) {
            throw new InvalidArgumentException("Initial balance cannot be negative.");
        }
        $this->balance = $initialBalance;
    }

    public function withdraw($amount) {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Withdrawal amount must be positive.");
        }
        if ($amount > $this->balance) {
            throw new Exception("Insufficient funds.");
        }
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Using the BankAccount class
try {
    $account = new BankAccount(1000);
    echo "Initial balance: $" . $account->getBalance() . "\n";

    // Attempt to withdraw a valid amount
    $newBalance = $account->withdraw(500);
    echo "Balance after withdrawal: $" . $newBalance . "\n";

    // Attempt to withdraw more than the balance
    $account->withdraw(1000);

} catch (InvalidArgumentException $e) {
    echo "Invalid argument: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}