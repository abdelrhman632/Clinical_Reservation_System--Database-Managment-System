<form method="POST" action="submit_appointment.php">
    <label>Patient ID:</label>
    <input type="number" name="patient_id" required>
    <label>Doctor ID:</label>
    <input type="number" name="doctor_id" required>
    <label>Service ID:</label>
    <input type="number" name="service_id" required>
    <label>Appointment Date:</label>
    <input type="datetime-local" name="appointment_date" required>
    <button type="submit">Book Appointment</button>
</form>
