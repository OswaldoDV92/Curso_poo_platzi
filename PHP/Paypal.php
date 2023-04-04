<?php
require_once("Payment.php");
class Paypal extends Payment{
    public $reference;
    public $subsidiary;

    public function __construct($id, $reference, $subsidiary){
        parent::__construct($id);
        $this->reference = $reference;
        $this->subsidiary = $subsidiary;
    }
}
?>