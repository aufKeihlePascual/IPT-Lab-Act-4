<?php

class ATMTransactions {
    private $transactionID, $date, $type, $amount, $postBalance;

    public function __construct($transactionID, $date, $type, $amount, $postBalance) {
        $this-> transactionID = $transactionID; 
        $this-> date = $date; 
        $this-> type = $type; 
        $this-> amount = $amount; 
        $this-> postBalance = $postBalance; 
    }

    public function modifies() {
        return false;
    }
}

?>