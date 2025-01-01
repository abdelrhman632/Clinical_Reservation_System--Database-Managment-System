<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Reservation System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .button {
            display: block;
            width: 200px;
            margin: 10px auto;
            padding: 10px;
            text-align: center;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Clinic Reservation System</h1>
        <a href="add_patient.php" class="button">Add New Patient</a>
        <a href="delete_appointment.php" class="button">Delete Appointment</a>
        <a href="update_patient.php" class="button">Update Patient Details</a>
        <a href="view_doctors.php" class="button">View Doctors</a>
        <a href="count_appointments.php" class="button">Count Appointments</a>
        <a href="calculate_revenue.php" class="button">Calculate Revenue</a>
        <a href="add_appointment.php" class="button">Add Appointment</a>
        <a href="select_query.php" class="button">Select Query</a>
        <a href="aggregate_query1.php" class="button">Count Total Patients</a>
        <a href="aggregate_query2.php" class="button">Average Revenue</a>
        <a href="join_query1.php" class="button">Appointments with Details</a>
        <a href="join_query2.php" class="button">Revenue by Service</a>

        

        
    </div>
</body>
</html>
