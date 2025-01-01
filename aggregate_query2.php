<?php
include 'db_connection.php';

$sql = "SELECT AVG(TotalAmount) AS AverageRevenue FROM Invoices";
$result = $conn->query($sql);

echo "<h1>Average Revenue per Appointment</h1>";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p>Average Revenue: $" . number_format($row["AverageRevenue"], 2) . "</p>";
} else {
    echo "<p>No revenue data found.</p>";
}

$conn->close();
?>
