
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="example.php" method="post">
        <label>quantity </label> <br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form> -->
    <!-- <form action="example.php" method="post">
        <label>radius</label>
        <input type="text" name="radius"> <br>
        <input type="submit" value="circumfrance">
    </form> -->
    <form action="example.php" method="post">
        <label>username</label>
        <input type="text" name="username"> <br>
        <label>password</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="details">
    </form>
</body>
</html>
<?php
// $item = "pizza";
// $price = 4.67;
// $quantity = $_POST['quantity'];
// $total = null;
// $total = $price * $quantity;
// echo "you have ordered {quantity} x {item}/s";
// echo $total;
// $radius = $_POST['radius'];

// $circumfrance = null;
// $circumfrance = 2*pi()*$radius;
// $circumfrance = round($circumfrance,2);
// echo"Circumference = {$circumfrance}cm <br>";
if (isset($_POST['details'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;
}

setcookie('name', 'Flavio', time() + 3600 * 24 * 7);
setcookie(session_name(), '');
?>
<?php
// phpinfo();
// echo PHP_VERSION;   
$x = 200;
var_dump(is_null($x)) ."<br/>"; 
$foods =  array("pizza", "meat","orange");
foreach($foods as $food){
    echo $food . "<br/>";

}
$foods = array("mango", "apple", "banana",);
// // echo $food[2];
// // array_push($foods,"pineapple") ;
foreach($foods as $food){
    echo $food . " <br/>";
//     // echo count($foods);
}

echo "\n";  
//use of keys in php as used in associative array
$person =[
    "name" => "john",
    "age" => 18,    
    "city" => "nairobi",
];
// echo "name: " . $person["name"] . "\n";
// echo "age: " . $person["age"] . "\n";
// echo "city: " . $person["city"] . "\n";
foreach ($person as $key => $value) {
    echo "$key: $value"."<br />";
}
//match in php
$payment = 1;
match($payment){
    1 => print 'paid',
    2 => print 'declined',
    3 => print 'received',
    
}
//use of ticks

// function tick_handler() {
//     echo "Tick\n";
// }

// register_tick_function('tick_handler');

// declare(ticks=2);

// for ($i = 1; $i <= 10; $i++) {
//     echo "$i\n";
// }

// unregister_tick_function('tick_handler');


?> 
