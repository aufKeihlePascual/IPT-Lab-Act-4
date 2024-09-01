<?php 

abstract class Account {
    protected $accountNum;
    protected $balance;

    public function __construct($initialBalance) {
        $this -> balance = $initialBalance;
    }
    
    abstract public function withdraw($amount);
    abstract public function deposit($amount);
}

?>