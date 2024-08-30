<?php
session_start();
session_unset();
?>
<?php
if (file_exists('node.php')) {
    echo "node.php exists";
$file = fopen('node.php', 'r');

}

// Open node.php

// Get size of session.php
$size = filesize('sessions1.php');
?>