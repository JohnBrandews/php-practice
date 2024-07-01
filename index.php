<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
    <label >Username</label>
    <input type="text" name="username"> <br>
    <label >password</label> 
    <input type="password" name="password"> <br>
    <input type="submit" value="log in">
    </form> -->
    <!-- <form action="index.php" method="post">
        <label>quantity</label> <br>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form> -->
    <form action="index.php" method="post">
         <!-- <label>enter a country</label> -->
        <!-- <input type="text" name="country">
        <input type="submit"> -->
        <!-- <label>Username</label> -->
        <!-- <input type="text" name="username"> <br>
        <label>Password</label>
        <input type="password" name="password"> <br>
        <!-- <input type="submit" name="login" value="Log in"> --> 
        <!-- <input type="radio" name="credit" value="visa Card">
            Visa <br>
            <input type="radio" name="credit" value="master card">
            Master Card <br>
            <input type="radio" name="credit" value="kenyan Express">
            Kenyan Express <br>
            <input type="submit" name="confirm" value="confirm"> -->
            <!-- <input type="checkbox" name="pizza" value="Pizza">
            pizza <br>
            <input type="checkbox" name="hamburger" value="Hamburger">
            hamburger <br>
            <input type="checkbox" name="hotdog" value="Hotdog">
            hotdog <br>
            <input type="checkbox" name="taco" value="Taco">
            taco <br>
        <input type="submit" name="submit"> -->
            <!-- <label>Username</label> 
            <input type="text" name="username"> <br>
            <label>Age</label> 

            <input type="text" name="age"> <br>
            <input type="submit" name="login" value="login"> -->
    </form>
</body>
</html>
<?php
// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} <br>";
// $item = "cookie";
// $price = 4.77;
// $quantity = $_POST["quantity"];
// $total = null;
// $total = $price*$quantity;
// echo" you have ordered{$quantity} {$item} <br>";
// echo"your total is \${$total}";
// $x = $_POST['x'];
// $total = null;
// $total = abs($x);
// $total = ceil($x);
// $total = pi();
// echo $total;
// $radius = $_POST['radius'];
// $circumfrance = null;
// $circumfrance = 2*pi()*$radius;
// $circumfrance = round($circumfrance,2);
// echo"Circumference = {$circumfrance}cm <br>";
// $date = date("l");
// for($i=0; $i<10; $i++){
//     echo $i;
// }
// echo $date
// $foods = array("mango", "apple", "banana",);
// echo $food[2];
// array_push($foods,"pineapple");
// foreach($foods as $food){
    // echo $food . " <br/>";
    // echo count($foods);
// }
// $capitals = array("Kenya"=>"nairobi","Uganda"=>"kampala","Tanzania"=>"dodoma");
// foreach($capitals as $key => $value){
//     echo "{$key}  {$value} .  <br/>";
// }
// $capital = $capitals[$_POST ['country']];
// echo $capital;
// if(isset($_POST['login'])){
//     $username = $_POST ['username'];
//     $password = $_POST ['password'];
//     if(empty($username)){
//         echo 'Please enter your username';
//     }
//     elseif(empty($password)){
//         echo 'Please enter your password';
//     }
// }
// if(isset($_POST["confirm"])){
//     if(isset($_POST["credit"])){
//         $credit = $_POST["credit"];
//         echo $credit;
//     }
//     else{
//         echo "Please make a selection";
//     }
// }
// if(isset($_POST["submit"])){
//     if(isset($_POST["pizza"])){
//         echo "Pizza <br/>";
//     }
//     if(isset($_POST["hamburger"])){
//         echo "hamburger <br/>";
//     }
//     if(isset($_POST["hotdog"])){
//         echo "hotdog <br/>";
//     }
//     if(isset($_POST["taco"])){
//         echo "taco <br/>";
//     }
// }
// function hypotenuse($a, $b){
//     $c = sqrt($a ** 2 + $b  ** 2);
//     return $c;
// }
// echo hypotenuse(10,5);
// if(isset($_POST["login"])){
//     // $username = filter_input(INPUT_POST, "username",
//     // FILTER_SANITIZE_SPECIAL_CHARS);//for filtering characters
//     $age = filter_input(INPUT_POST, "age",
//    FILTER_SANITIZE_NUMBER_INT);//for filtering only integer values
//    if(empty($age)){
//     echo "Please enter a valid age <br/>";
//    }
//    else{
//     echo "you are{$age} years old <br/>";

//    }
    // echo "hello {$username} <br/>";
// }
// include("header.html");
// setcookie("chicken","fried",time() - 0,"/");
// foreach($_SERVER as $key => $value){
//     echo"{$key} = {$value}"."<br/>";
// }
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $country = $_POST['country'];
//     echo $country;
// }
$password = "lil bendy$";
$hash = password_hash($password, PASSWORD_DEFAULT);
if(password_verify("ian", $hash)){
    echo "you are log in";
}
else{
    echo "incorrect password";
}
// echo $hash;
?>
<!-- <?php
// include("footer.html");
?> -->