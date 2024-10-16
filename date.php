<?php
// date_default_timezone_set('UTC');   
// $datetime = new DateTime("05/12/2021");
// echo $datetime->getTimezone()->getName() . '_' . $datetime->format('m/d/Y g:i A') . PHP_EOL;   
// $datetime->setDate(2021, 4, 21)->setTime(2, 15);
// $datetime->setTimezone(new DateTimeZone('Europe/Paris'));
// echo $datetime->getTimezone()->getName() . '_' . $datetime->format('m/d/Y g:i A') . PHP_EOL; 
// echo "<br>";
// $foods = ["apple", " ", "banana"," ", "mangoes"];
// foreach ($foods as $food){
//     echo ($food);
// }
// print_r($_SERVER);

if(isset($_POST["submit"])) {
    // Sanitize username: remove HTML tags and encode special characters
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    
    // For password, we don't sanitize but we validate its strength
    $password = $_POST["password"];
    
    // Validate username (alphanumeric and underscore only)
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        echo "Invalid username. Only letters, numbers, and underscores are allowed.";
    } else {
        echo "Sanitized username: " . $username . "<br>";
    }
    
    // Validate password strength
    if (strlen($password) < 8) {
        echo "Password is too short. It should be at least 8 characters long.";
    } elseif (!preg_match('/[A-Z]/', $password) || 
              !preg_match('/[a-z]/', $password) || 
              !preg_match('/[0-9]/', $password) || 
              !preg_match('/[^A-Za-z0-9]/', $password)) {
        echo "Password is not strong enough. It should contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
    } else {
        echo "Password meets strength requirements.<br>";
        // In a real application, you would hash the password here before storing it
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>