<<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "books4mu_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO feedback (username, email, message) VALUES ('$username', '$email', '$message')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
