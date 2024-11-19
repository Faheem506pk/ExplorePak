<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Update this to your MySQL username
$password = ""; // Update this to your MySQL password
$dbname = "tour"; // Update this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
