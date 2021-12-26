<?php
//Single Responsibility Principle (one class has one task)
//use SOLID\SRP\Bus;
//use \SOLID\SRP\Driver;
//use \SOLID\SRP\Route;
//
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
//
//$dirver = new Driver('Mohammad Sultan', 21, 'fe23x34x', 'palestine,gaza');
//$route1 = new Route('Rafah', 'Azahra', 100);
//$route2 = new Route('Gaza', 'Azahra', 50);
//
//$bus = new Bus(102);
//$bus->setDriver($dirver);
//$bus->addRoute($route1);
//$bus->addRoute($route2);
//$bus->setDoors(2);
//$bus->setColor('red');
//$bus->setNumberOfPassengers(50);
//$bus->setMaximumSpeed(100);
//echo $bus->move();
//
//echo '<pre>';
//print_r($bus);
//echo '<pre>';

//Open / Close Principle
//program to an interface not to implementation (concrete class)
//encapsulate what is varies

//use SOLID\OCP\Plane;
//use \SOLID\OCP\Driver;
//use \SOLID\OCP\Route;
//use \SOLID\OCP\Trip;
//use \SOLID\OCP\MoveInSky;
//
//$dirver = new Driver('Mohammad Sultan', 21, 'fe23x34x', 'palestine,gaza');
//$route1 = new Route('Rafah', 'Azahra', 100);
//$route2 = new Route('Gaza', 'Azahra', 50);
//
//$bus = new Plane();
//$bus->setDriver($dirver);
//$bus->addRoute($route1);
//$bus->addRoute($route2);
////$bus->setDoors(2);
//$bus->setColor('red');
////$bus->setNumberOfPassengers(50);
//$bus->setMaximumSpeed(100);
//$bus->setMoveable(new MoveInSky());
//
//$trip = new Trip($bus, 111, 20.2, 150);
//echo $trip->move();


//Liskov Subsituatoin principles (function that use pointer to the base class must be able use object of
//drived classes without kowing it.

use SOLID\LSP\Rectangle;
use SOLID\LSP\Square;

$rectangle = new Square();
$rectangle->setWidth(20);
$rectangle->setHeight(5);

echo $rectangle->calculateArea();


function f(Rectangle $rectangle)
{
    if ($rectangle instanceof Square) {
        if ($rectangle->calculateArea() == 100) {
            echo 'There is something wrong';
        } else {
            echo 'Nothing is wrong';
        }
    }
    echo $rectangle->calculateArea();
}

f($rectangle);

$encypt =  (new \SOLID\LSP\SubEncrypt());
$encypt->setString('Mohammad');
echo $encypt->ecrypt();
