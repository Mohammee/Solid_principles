<?php
use SOLID\SRP\Bus;
use \SOLID\SRP\Driver;
use \SOLID\SRP\Route;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$dirver = new Driver('Mohammad Sultan' , 21 , 'fe23x34x' , 'palestine,gaza');
$route1 = new Route('Rafah' , 'Azahra' , 100);
$route2 = new Route('Gaza' , 'Azahra' , 50);

$bus = new Bus(102);
$bus->setDriver($dirver);
$bus->addRoute($route1);
$bus->addRoute($route2);
$bus->setDoors(2);
$bus->setColor('red');
$bus->setNumberOfPassengers(50);
$bus->setMaximumSpeed(100);
echo $bus->move();

echo '<pre>';
print_r($bus);
echo '<pre>';
