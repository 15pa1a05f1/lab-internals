<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "reg" ;

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db) or die("Connection failed: " . mysqli_connect());
 	echo "connected";
 	
?>

