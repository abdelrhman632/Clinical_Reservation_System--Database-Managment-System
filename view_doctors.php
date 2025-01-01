<?php
include 'db_connection.php';

$sql = "SELECT * FROM Doctors";
$result = $conn->query($sql);

echo "<h1>Doctors</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Doctor ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Specialty</th>
                <th>Phone</th>
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
    echo "No doctors available.";
}

$conn->close();
?>
