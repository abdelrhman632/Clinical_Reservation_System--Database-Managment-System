<?php
include 'db_connection.php';

$sql = "
    SELECT 
        Services.ServiceID, 
        Services.ServiceName, 
        SUM(Invoices.TotalAmount) AS TotalRevenue
    FROM Appointments
    JOIN Services ON Appointments.ServiceID = Services.ServiceID
    JOIN Invoices ON Appointments.AppointmentID = Invoices.AppointmentID
    GROUP BY Services.ServiceID, Services.ServiceName
";
$result = $conn->query($sql);

echo "<h1>Revenue by Service</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Service ID</th>
                <th>Service Name</th>
                <th>Total Revenue</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ServiceID"] . "</td>
                <td>" . $row["ServiceName"] . "</td>
                <td>$" . number_format($row["TotalRevenue"], 2) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No revenue data found.</p>";
}

$conn->close();
?>
