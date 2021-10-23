<?php

require 'HighWay.php';
require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';
require 'MotorWay.php';
require 'Skateboard.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
$truck = new Truck('Black', 3, 250, 3500);
$skate = new Skateboard('Blue',1);

$pedestrianWay = new PedestrianWay(1, 10);
$residentialWay = new ResidentialWay(2, 50);
$motorway = new MotorWay(4, 130);
$motorway->addVehicle($car);
$pedestrianWay->addVehicle($skate);
$residentialWay->addVehicle($skate);

$motorway->addVehicle($skate);

try {
	$car->start();
} catch (Exception $e) {
	$car->setParkBrake();
}finally {
	echo 'Ma voiture roule comme un donut';
}
