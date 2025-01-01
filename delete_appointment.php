<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appointmentID = $_POST['appointmentID'];

    // Delete related invoice first
    $deleteInvoice = "DELETE FROM Invoices WHERE AppointmentID = $appointmentID";
    $conn->query($deleteInvoice);

    // Then delete the appointment
    $deleteAppointment = "DELETE FROM Appointments WHERE AppointmentID = $appointmentID";
    if ($conn->query($deleteAppointment) === TRUE) {
        echo "Appointment deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
<form method="POST" action="">
    <label>Appointment ID:</label>
    <input type="number" name="appointmentID" required>
    <button type="submit">Delete Appointment</button>
</form>
