<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to my page</h2> <br>
    <!-- <a href="sessions1.php">this is the login page</a> <br> -->
     <form action="about.php" method="post">
        <input type="submit" name="logout" value="logout">
     </form>
</body>
</html>
 <?php
//  echo $_SESSION["username"] ."<br/>";
//         echo $_SESSION["password"] . "</br/>";
        if(isset($_POST["logout"])){
            session_destroy();
            header("Location:sessions1.php");
        }
?> 