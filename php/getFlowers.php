<?php
include 'connection.php';

$sql = "SELECT * FROM flowers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "<p>" . $row["description"] . "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>