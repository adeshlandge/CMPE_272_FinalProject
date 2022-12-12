<?php
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'yourdbusername');
define('DB_PASSWORD', 'yourdbpassword');
define('DB_NAME', 'yourdbname');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

