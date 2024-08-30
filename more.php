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
?>
 


<?php
// require 'example.php';
// phpinfo();



?>