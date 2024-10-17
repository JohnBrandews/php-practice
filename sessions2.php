<?php
// session_start()
//  setcookie("berrin",'gio',time() + 10);
//  if(isset($_COOKIE["berrin"])){
//     echo $_COOKIE["berrin"];
//  }
//  else{
//     echo "Error";
//  }
//  print_r($_COOKIE);

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Set a cookie with the username
    setcookie("username", $_POST['username'], time() + (86400 * 30)); // 30 days
    echo "Cookie set!";
}

// Delete cookie if logout is clicked
if(isset($_POST['logout'])) {
    setcookie("username", "", time() - 3600); // Set expiration to past time
    echo "Cookie deleted!";
}

// Read cookie
if(isset($_COOKIE['username'])) {
    echo "Welcome back, " . htmlspecialchars($_COOKIE['username']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <?php if(!isset($_COOKIE['username'])): ?>
        //this forms shows when there is no cookie
        <form method="post">
            <input type="text" name="username" placeholder="Enter username">
            <input type="submit" name="submit" value="Set Cookie">
        </form>
    <?php else: ?>
        //this form shows when there is a cookie
        <form method="post">
            <input type="submit" name="logout" value="Delete Cookie">
        </form>
    <?php endif; ?>
</body>
</html>
