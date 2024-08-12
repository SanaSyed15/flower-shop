<?php
session_start();
include 'connection.php';

$flower = $_POST['flower'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$username = $_SESSION['username'];

$sql = "INSERT INTO orders (username, flower, quantity, address) VALUES ('$username', '$flower', $quantity, '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!
    Thank you for Shopping!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>