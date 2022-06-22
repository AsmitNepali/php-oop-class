<?php
interface Payment {
    public function pay();
}

class Khalti implements Payment {
    public function pay() {
        echo "Pay by khalti";
    }

    public function reward() {

    }

}

class Esewa implements Payment{

    public function pay() {
        echo "Pay by esewa";
    }

    public function point() {

    }
}

class ImePay {
    public function rewards(){

    }
}

class Verify {

    public function __construct(Payment $paymentMethod)
    {
        $paymentMethod->pay();
    }

}

$verify = new Verify(new Khalti());
