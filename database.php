<?php
$db_server = "localhost";
$db_user ="root";
$db_pass = "";
$db_name = "businessdb";
$conn = "";
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
if($conn){
    echo "Connection established";
}
else{
    echo "Connection failed";
}
?>