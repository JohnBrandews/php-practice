<?php
require_once 'Dog.php';
require_once 'Car.php';

// Using fully qualified names
$dog = new \Animals\Dog();
echo $dog->speak() . "\n";  // Outputs: Woof!

$car = new \Vehicles\Car();
echo $car->start() . "\n";  // Outputs: Vroom!

// Using the 'use' keyword
use Animals\Dog;
use Vehicles\Car as Vehicle;  // Aliasing

$anotherDog = new Dog();
echo $anotherDog->speak() . "\n";  // Outputs: Woof!

$anotherCar = new Vehicle();
echo $anotherCar->start() . "\n";