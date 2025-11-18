<?php
$servername = "sql123.epizy.com";           // Replace with your host
$username   = "if0_40450988";               // Your DB username
$password   = "yourpassword";               // Your DB password
$database   = "if0_40450988_blood_donation"; // Your DB name
$port       = 3306;                         // Default MySQL port

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
