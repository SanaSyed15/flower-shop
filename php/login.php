<?php
session_start();  // Start the session
include 'connection.php';  // Include the database connection

// Get the submitted form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prevent SQL injection
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// Query to check the user's credentials
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// If the user exists in the database
if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;  // Store the username in the session
    header("Location: ../flowers.html");  // Redirect to the flowers page
} else {
    // If the credentials are incorrect, display an error message
    echo "Invalid username or password. <a href='../login.html'>Try again</a>";
}

$conn->close();  // Close the database connection
?>