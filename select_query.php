<?php
include 'db_connection.php';

$sql = "SELECT * FROM Doctors WHERE Specialty = 'Cardiology'";
$result = $conn->query($sql);

echo "<h1>Doctors - Cardiology</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Doctor ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Specialty</th>
                <th>Phone Number</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["DoctorID"] . "</td>
                <td>" . $row["FirstName"] . "</td>
                <td>" . $row["LastName"] . "</td>
                <td>" . $row["Specialty"] . "</td>
                <td>" . $row["PhoneNumber"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No doctors found for the given specialty.</p>";
}

$conn->close();
?>
