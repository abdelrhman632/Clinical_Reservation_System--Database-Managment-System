<?php
include 'db_connection.php';

// Query to count the total number of appointments
$sql = "SELECT COUNT(*) AS TotalAppointments FROM Appointments";
$result = $conn->query($sql);

echo "<h1>Total Appointments</h1>";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p>Total Appointments: " . $row["TotalAppointments"] . "</p>";
} else {
    echo "<p>No appointments found.</p>";
}

$conn->close();
?>
