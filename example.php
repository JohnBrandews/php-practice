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
?>
<?php
phpinfo();
?> 