<?php 

abstract class Account {
    protected $accountNum, $balance;

    public function __construct($accountNum, $balance) {
        $this -> accountNum = $accountNum;
        $this -> balance = $balance;
    }
    
    public function withdraw($amount) {
        if ($this-> balance >= $amount) {
            $this-> balance -= $amount;
        }
        else {
            return false;
        }
    }

    public function deposit($amount) {
        $this-> balance =+ $amount;  
    }

    public function createTransaction() {
        return false;
    }
}

?>