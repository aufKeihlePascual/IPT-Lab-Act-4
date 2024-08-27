<?php 

class Account {
    protected $accountNum;
    protected $balance;

    public function __construct($accountNum, $initialBalance) {
        $this -> accountNum = $accountNum;
        $this -> balance = $initialBalance;
    }
    
    public function getAccountNum() {
        return false;
    }
}

?>