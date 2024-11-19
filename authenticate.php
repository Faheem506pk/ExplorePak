<?php
session_start();

// Hardcoded Admin Credentials
$admin_username = "admin";  // Change this to your desired admin username
$admin_password = "admin123";  // Change this to your desired admin password

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input to prevent XSS and other attacks
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // Check if the entered credentials match the hardcoded admin credentials
    if ($username === $admin_username && $password === $admin_password) {
        // Store session variables
        $_SESSION['user_id'] = 1;  // You can store any identifier, like 1 for admin
        $_SESSION['username'] = $username;

        // Redirect to the admin panel
        header("Location: admin.php");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}
?>
