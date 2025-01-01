<?php
include 'db_connection.php';

// Query to calculate revenue grouped by service
$sql = "
    SELECT 
        Services.ServiceID, 
        Services.ServiceName, 
        SUM(Invoices.TotalAmount) AS Revenue
    FROM 
        Invoices
    JOIN 
        Appointments ON Invoices.AppointmentID = Appointments.AppointmentID
    JOIN 
        Services ON Appointments.ServiceID = Services.ServiceID
    GROUP BY 
        Services.ServiceID, Services.ServiceName
";
$result = $conn->query($sql);

echo "<h1>Revenue by Service</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Service ID</th>
                <th>Service Name</th>
                <th>Revenue</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ServiceID"] . "</td>
                <td>" . $row["ServiceName"] . "</td>
                <td>$" . $row["Revenue"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No revenue data found.</p>";
}

$conn->close();
?>
