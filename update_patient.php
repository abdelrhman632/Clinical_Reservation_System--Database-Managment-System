<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientID = $_POST['patientID'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    $updateQuery = "UPDATE Patients SET PhoneNumber = '$phone', DateOfBirth = '$dob' WHERE PatientID = $patientID";
    if ($conn->query($updateQuery) === TRUE) {
        echo "Patient details updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
<form method="POST" action="">
    <label>Patient ID:</label>
    <input type="number" name="patientID" required>
    <label>Phone:</label>
    <input type="text" name="phone" required>
    <label>Date of Birth:</label>
    <input type="date" name="dob" required>
    <button type="submit">Update Patient Details</button>
</form>
