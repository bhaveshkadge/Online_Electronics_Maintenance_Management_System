<!-- Code for database connection -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "maintenance_management";
// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>