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

// SQL query to fetch package data
$sql = "SELECT name, description, CONCAT('Rs ', price_min, ' - Rs ', price_max) AS price, image FROM packages";
$result = $conn->query($sql);

$packages = array();

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $packages[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($packages);
?>
