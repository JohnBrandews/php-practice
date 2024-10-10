<?php

// Parent class
class Vehicle {
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "This vehicle is a {$this->year} {$this->brand} {$this->model}.";
    }

    public function startEngine() {
        return "The {$this->brand} {$this->model}'s engine is starting.";
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    private $numDoors;

    public function __construct($brand, $model, $year, $numDoors) {
        parent::__construct($brand, $model, $year);
        $this->numDoors = $numDoors;
    }

    public function getInfo() {
        return parent::getInfo() . " It has {$this->numDoors} doors.";
    }

    public function honk() {
        return "Beep! Beep!";
    }
}

// Another child class inheriting from Vehicle
class Motorcycle extends Vehicle {
    private $engineSize;

    public function __construct($brand, $model, $year, $engineSize) {
        parent::__construct($brand, $model, $year);
        $this->engineSize = $engineSize;
    }

    public function getInfo() {
        return parent::getInfo() . " It has a {$this->engineSize}cc engine.";
    }

    public function wheelie() {
        return "The {$this->brand} {$this->model} pops a wheelie!";
    }
}

// Using the classes
$car = new Car("Toyota", "Corolla", 2022, 4);
$motorcycle = new Motorcycle("Harley-Davidson", "Street 750", 2021, 750);

echo $car->getInfo() . "\n";
echo $car->startEngine() . "\n";
echo $car->honk() . "<br>";

echo $motorcycle->getInfo() . "\n";
echo $motorcycle->startEngine() . "\n";
echo $motorcycle->wheelie() . "\n";