<?php
include 'db_connection.php';

$sql = "
    SELECT 
        Patients.FirstName AS PatientFirstName, 
        Patients.LastName AS PatientLastName, 
        Doctors.FirstName AS DoctorFirstName, 
        Doctors.LastName AS DoctorLastName, 
        Appointments.AppointmentDate
    FROM Appointments
    JOIN Patients ON Appointments.PatientID = Patients.PatientID
    JOIN Doctors ON Appointments.DoctorID = Doctors.DoctorID
";
$result = $conn->query($sql);

echo "<h1>Appointments with Patient and Doctor Details</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Appointment Date</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["PatientFirstName"] . " " . $row["PatientLastName"] . "</td>
                <td>" . $row["DoctorFirstName"] . " " . $row["DoctorLastName"] . "</td>
                <td>" . $row["AppointmentDate"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No appointments found.</p>";
}

$conn->close();
?>
