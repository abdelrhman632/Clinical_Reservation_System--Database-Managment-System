<?php
include 'db_connection.php';

$patient_id = $_POST["patient_id"];
$doctor_id = $_POST["doctor_id"];
$service_id = $_POST["service_id"];
$appointment_date = $_POST["appointment_date"];

$sql = "INSERT INTO Appointments (PatientID, DoctorID, AppointmentDate, ServiceID) 
        VALUES ('$patient_id', '$doctor_id', '$appointment_date', '$service_id')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
