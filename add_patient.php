<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    $sql = "INSERT INTO Patients (FirstName, LastName, PhoneNumber, DateOfBirth) 
            VALUES ('$firstName', '$lastName', '$phone', '$dob')";

    if ($conn->query($sql) === TRUE) {
        echo "Patient added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<form method="POST" action="">
    <label>First Name:</label>
    <input type="text" name="firstName" required><br>
    <label>Last Name:</label>
    <input type="text" name="lastName" required><br>
    <label>Phone:</label>
    <input type="text" name="phone" required><br>
    <label>Date of Birth:</label>
    <input type="date" name="dob" required><br>
    <button type="submit">Add Patient</button>
</form>
