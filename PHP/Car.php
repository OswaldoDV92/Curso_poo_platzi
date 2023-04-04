<?php
require_once "Account.php";

class Car{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, Account $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    function PrintDataCar(){
        echo "License: $this->license, Driver: {$this->driver->name}, Document: {$this->driver->document} ";
    }

    public function getPassenger(){
        return $this->passenger;
    }

    public function setPassenger($passenger){
        if($passenger == 4){
            $this->passenger = $passenger;
        }
        else{
            echo "Necesitas asignar 4 pasajeros.";
        }
    }
}
?>
