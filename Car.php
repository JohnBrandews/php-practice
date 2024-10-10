 <?php
// namespace Vehicles;

// class Car {
//     public function start() {
//         return "Vroom!";
//     }
// } -
class Car {
    public $brand;
    public $color;
    public $mileage;

    public function __construct($brand, $color, $mileage) {
        $this->brand = $brand;
        $this->color = $color;
        $this->mileage = $mileage;
    }

    public function drive($distance) {
        $this->mileage += $distance;
    }

    public function __clone() {
        // This method is called when the object is cloned
        $this->mileage = 0; // Reset mileage for the new car
    }
}
try{
// Create an original car
$originalCar = new Car("Toyota", "Blue", 50000);

// Clone the car
$clonedCar = clone $originalCar;

// Modify the cloned car
$clonedCar->color = "Red";
$clonedCar->drive(200);

// Drive the original car
$originalCar->drive(100);

// Output results
echo "Original Car: " . $originalCar->brand . ", " . $originalCar->color . ", Mileage: " . $originalCar->mileage ."\n";
echo "<br>";
echo "Cloned Car: " . $clonedCar->brand . ", " . $clonedCar->color . ", Mileage: " . $clonedCar->mileage . "\n";
}
catch(Exception $e){
echo "an error occurred: " . $e->getMessage();
}