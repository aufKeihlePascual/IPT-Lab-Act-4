<?php

require_once 'Account.php';

class CurrentAccount extends Account {
    public function withdraw($amount) {
        if ($this-> balance >= $amount) {
            $this-> balance -= $amount;
        }
        else {
            throw new Exception("Insufficient Funds");
        }
    }

    public function deposit($amount) {
        $this-> balance += $amount;
    }
}

?>
