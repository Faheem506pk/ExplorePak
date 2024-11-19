<?php
  include 'db.php';

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get POST data and sanitize
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        // Insert data
        $sql = "INSERT INTO contact (Name, Email, Phone, Subject, Message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "We will contact you soon";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "No data submitted.";
    }

    // Close connection
    mysqli_close($conn);
?>
