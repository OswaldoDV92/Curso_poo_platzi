<?php
require_once("UberX.php");
require_once("Car.php");
require_once("Account.php");
require_once("User.php");
require_once("Driver.php");
require_once("UberVan.php");

$UberX = new UberX("FTH254", new Account("Walo", "Wy0258", "", ""), "Chevrolet", "Spark");
$UberX->setPassenger(4);
$UberX->PrintDataCar();
//$UberX->printDataBrand();

//$car = new Car("WAL0123", new Account("Walo Wayne", "WY7890", "", ""));
//$car->PrintDataCar();

$User = new User("Ozz", "ODV92", "ozz@rules.com", "ozzrules");
$User->printDataUser();

$driver = new Driver("Peter Parker", "AMZ700", "amazing@spider.man", "iamspiderman");
$driver->printDataDriver();

$ubervan = new UberVan("ABC123", new Account("Alguien", "XYZ789", "", ""), "", "");
$ubervan->setPassenger(6);
$ubervan->PrintDataCar();
?>