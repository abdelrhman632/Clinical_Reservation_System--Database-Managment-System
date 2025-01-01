<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientID = $_POST['patientID'];
    $doctorID = $_POST['doctorID'];
    $serviceID = $_POST['serviceID'];
    $appointmentDate = $_POST['appointmentDate'];

    // Insert the appointment into the database
    $sql = "INSERT INTO Appointments (PatientID, DoctorID, AppointmentDate, ServiceID) 
            VALUES ('$patientID', '$doctorID', '$appointmentDate', '$serviceID')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<form method="POST" action="">
    <label>Patient ID:</label>
    <input type="number" name="patientID" required><br>
    <label>Doctor ID:</label>
    <input type="number" name="doctorID" required><br>
    <label>Service ID:</label>
    <input type="number" name="serviceID" required><br>
    <label>Appointment Date:</label>
    <input type="datetime-local" name="appointmentDate" required><br>
    <button type="submit">Add Appointment</button>
</form>
