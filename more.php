<?php
//strick types enforces strick checking  of data types and returns in php
declare(strict_types=1);

function add(int $a, int $b) {
    return $a + $b;
}

echo add(5, 10) ."<br>";  // Throws a TypeError
function mulltiply($c, $d){
    return $c*$d;
}
echo mulltiply(5,8) . "<br>";
//spread operator
// function sum(...$numbers){
//    return  array_sum($numbers);
// }
// // $a = 45;
// // $b = 100;
// echo sum(56,78,456);
//we can use the is callable function to check if the  function is callable
function sub(int|float ...$numbers): int|float{
    return array_sum($numbers);

}
$x = 'sum';
if(is_callable($x)){
    echo $x(3,5,6,7);
} else{
    echo "not callable";
}
//call backs using map
$array = [2,3,4,5,6,7,8,9];
$array2 = array_map(function($element){
    return $element*2;

}, $array);
echo '<pre>';
print_r($array2);
//call back of array_map can be used  for both named and anonymous functions
//anonymous functions
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);
print_r($squared);
//named functions
function double($n) {
    return $n * 2;
}

$numbers = [1, 2, 3, 4, 5];
$doubled = array_map('double', $numbers);
print_r($doubled);
//use of arrow functions
$numbers = [1, 2, 3, 4, 5];
$tripled = array_map(fn($n) => $n * 3, $numbers);
print_r($tripled);
//displays time and date
//you can use utc or America/New_York or just leave it 
date_default_timezone_set("America/New_York");//sets the time zone in a region
$currenttime = time();
echo date('Y-m-d H:i:s', $currenttime) . "<br>";
echo '<pre>';

//array_combine .it checks if the keys and values are the same
// $array1 =['a','b','c'];
// $array2 =[56,76,8];
// print_r($array_combine($array1,$array2));
//array_filter 
$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
$even = array_filter($array,fn($number) => $number % 2 === 0);
print_r($even);
//another filter using named functions


function isEven($number) {
    return $number % 2 === 0;
}



$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$even = array_filter($array, 'isEven');

print_r($even);
//array_keys returns the index/position of an element in the array  
$array = ['a' => 5, 'b' => 6, 'c' => 7, 'd' => 8];
$keys = array_keys($array,6);
print_r($keys);
//triggers an error message
// trigger_error('example error',E_USER_ERROR);

?>
 

<?php
// require 'example.php';
// phpinfo();
//used tom list current directories
$dir = scandir(__DIR__);
var_dump($dir);
//you can use is_file or is_dir to check if it's directory or file
var_dump(is_dir($dir[2]));
//opens a file provided they are in the  directory
$file = fopen('index.php', 'r');
var_dump($file);
//prints out the content of the opened file
$content = file_get_contents('index.php');
echo $content;
//classes and objects
class Dog {
    public $name;
    public $age;
    public function bark(){
        echo "woof";
    }
}
$roger = new Dog();
$roger->name = 'Dog';
$roger->age = 7;
print_r($roger);
$roger ->  bark();
//constructor

class Transaction {
    public $amount;
    public $description;

    public function __construct($amount, $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax($rate) {
        $this->amount += $this->amount * $rate / 100;
    }
}

// Create an instance of the Transaction class
$transaction = new Transaction(100, "Sample transaction");

// Add tax
$transaction->addTax(10);

// Dump the transaction object
var_dump($transaction);

//method chaining allows you to call multiple methods on the same object
class Calculator {
    private $result = 0;

    public function add($value) {
        $this->result += $value;
        return $this;
    }

    public function subtract($value) {
        $this->result -= $value;
        return $this;
    }

    public function multiply($value) {
        $this->result *= $value;
        return $this;
    }

    public function divide($value) {
        if ($value != 0) {
            $this->result /= $value;
        }
        return $this;
    }

    public function getResult() {
        return $this->result;
    }
}

// Using method chaining
$calc = new Calculator();
$result = $calc->add(5)->multiply(2)->subtract(3)->divide(2)->getResult();

echo "The result is: " . $result; 

//constructor promotion
class promotion{
    private float $amount;
    public function __construct(
        float $amount = 2,
        private string $escription = "hello",

    ){
         echo $this -> amount . "<br />";
    }
}
class Person {
    public function __construct(
        public string $name,
        public int $age,
        public ?string $email = null //the nullable operator shows that
        //this property can be either a string or null
    ) {}
}

// Usage
$person = new Person("John Doe", 30, "john@example.com");
echo $person->name . "<br/>";
//nullable properties
class People{
    public function __construct(
        public string $name,
        public int $age,
        public ?string $email = null  // This is a nullable property
    ) {}
}

// Creating a person with an email
$alice = new Person("Alice", 30, "alice@example.com");
echo $alice->email;

// Creating a person without an email
$bob = new Person("Bob", 25);
echo $bob->email; 

// 
$alice->email = null;

//the nullable property allows us to optionally set the email property
?>