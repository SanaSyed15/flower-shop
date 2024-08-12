<?php
session_start();
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Simple authentication logic
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: ../flowers.html");
} else {
    echo "Invalid username or password";
}
?>