<?php
$servername = "localhost";
$username = "webserver";
$password = "dbpass";
$dbname = "chatdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	print("Connection worked!");
} 
?>
