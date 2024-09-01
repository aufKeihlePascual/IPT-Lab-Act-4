<?php

class Customer {
    private $name, $address, $dob, $cardNumber, $pin;

    public function __construct($name, $address, $dob, $cardNumber, $pin) {
        $this-> name = $name;
        $this-> address = $address;
        $this-> dob = $dob;
        $this-> cardNumber = $cardNumber;
        $this-> pin = $pin;
    }

    public function verifyPassword ($pinNumber) {
        return $this-> pin === $pinNumber;
    }
}

?>