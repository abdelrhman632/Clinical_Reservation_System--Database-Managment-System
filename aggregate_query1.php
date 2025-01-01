<?php
include 'db_connection.php';

$sql = "SELECT COUNT(*) AS TotalPatients FROM Patients";
$result = $conn->query($sql);

echo "<h1>Total Patients</h1>";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p>Total Patients: " . $row["TotalPatients"] . "</p>";
} else {
    echo "<p>No patients found.</p>";
}

$conn->close();
?>
