<?php

require_once 'Account.php';

class SavingAccount extends Account {
    public function __construct($accountNum, $initialBalance) {
        parent::__construct($accountNum, $initialBalance);

    }

    public function checkSavingsBalance() {
            return false;
    }

}

?>