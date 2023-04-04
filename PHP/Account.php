<?php
class Account{
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($name, $document, $email, $password){
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;
        $this->password = $password;
    }

    function printDataUser(){
        echo "Name: $this->name, Document: $this->document, Email: $this->email, Password: $this->password ";
    }

    function printDataDriver(){
        echo "Driver: $this->name, Document: $this->document, Email: $this->email, Password: $this->password ";
    }
}
?>
