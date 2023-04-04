<?php
require_once("Payment.php");
class CreditCard extends Payment{
    public $bank;
    public $dateExpire;
    public $cvvNumber;

    public function __construct($id, $bank, $dateExpire, $cvvNumber){
        parent::__construct($id);
        $this -> bank = $bank;
        $this -> dateExpire = $dateExpire;
        $this -> cvvNumber = $cvvNumber;
    }
}
?>