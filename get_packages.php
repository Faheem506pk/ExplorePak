<?php
include 'db.php';

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
