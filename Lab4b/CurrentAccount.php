<?php

require_once 'Account.php';

class CurrentAccount extends Account {
    public function __construct($accountNum, $initialBalance) {
        parent::__construct($accountNum, $initialBalance);
        $this -> accountNum = $accountNum;
        $this -> balance = $initialBalance;

    }

}

?>
