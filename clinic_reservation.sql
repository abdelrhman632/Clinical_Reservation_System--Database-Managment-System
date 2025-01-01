-- Create Tables
CREATE TABLE Patients (
    PatientID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    PhoneNumber VARCHAR(15),
    DateOfBirth DATE
);

CREATE TABLE Doctors (
    DoctorID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Specialty VARCHAR(50),
    PhoneNumber VARCHAR(15)
);

CREATE TABLE Services (
    ServiceID INT AUTO_INCREMENT PRIMARY KEY,
    ServiceName VARCHAR(50),
    Price DECIMAL(10, 2)
);

CREATE TABLE Appointments (
    AppointmentID INT AUTO_INCREMENT PRIMARY KEY,
    PatientID INT,
    DoctorID INT,
    AppointmentDate DATETIME,
    ServiceID INT,
    FOREIGN KEY (PatientID) REFERENCES Patients(PatientID),
    FOREIGN KEY (DoctorID) REFERENCES Doctors(DoctorID),
    FOREIGN KEY (ServiceID) REFERENCES Services(ServiceID)
);

CREATE TABLE Invoices (
    InvoiceID INT AUTO_INCREMENT PRIMARY KEY,
    AppointmentID INT,
    TotalAmount DECIMAL(10, 2),
    PaymentStatus VARCHAR(20),
    FOREIGN KEY (AppointmentID) REFERENCES Appointments(AppointmentID)
);

-- Insert Data into Patients
INSERT INTO Patients (FirstName, LastName, PhoneNumber, DateOfBirth) VALUES
('John', 'Doe', '1234567890', '1990-05-15'),
('Jane', 'Smith', '0987654321', '1985-10-25'),
('Alice', 'Johnson', '1122334455', '1993-07-19'),
('Bob', 'Brown', '5566778899', '1980-12-05'),
('Charlie', 'Davis', '6677889900', '2000-01-01');

-- Insert Data into Doctors
INSERT INTO Doctors (FirstName, LastName, Specialty, PhoneNumber) VALUES
('Emily', 'Clark', 'Cardiology', '1231231234'),
('Daniel', 'Miller', 'Orthopedics', '2342342345'),
('Sophia', 'Wilson', 'Dermatology', '3453453456'),
('James', 'Anderson', 'Pediatrics', '4564564567'),
('Olivia', 'Thomas', 'Neurology', '5675675678');

-- Insert Data into Services
INSERT INTO Services (ServiceName, Price) VALUES
('Consultation', 100.00),
('X-Ray', 200.00),
('Blood Test', 50.00),
('MRI Scan', 500.00),
('Therapy Session', 150.00);

-- Insert Data into Appointments
INSERT INTO Appointments (PatientID, DoctorID, AppointmentDate, ServiceID) VALUES
(1, 1, '2024-12-22 10:00:00', 1),
(2, 2, '2024-12-22 11:00:00', 2),
(3, 3, '2024-12-22 12:00:00', 3),
(4, 4, '2024-12-22 13:00:00', 4),
(5, 5, '2024-12-22 14:00:00', 5);

-- Insert Data into Invoices
INSERT INTO Invoices (AppointmentID, TotalAmount, PaymentStatus) VALUES
(1, 100.00, 'Paid'),
(2, 200.00, 'Unpaid'),
(3, 50.00, 'Paid'),
(4, 500.00, 'Unpaid'),
(5, 150.00, 'Paid');

-- Example Queries
-- 1. Insert Query
INSERT INTO Patients (FirstName, LastName, PhoneNumber, DateOfBirth) VALUES
('George', 'Taylor', '7788990011', '1995-08-15');

-- 2. Delete Query
DELETE FROM Appointments WHERE AppointmentID = 5;

-- 3. Update Query
UPDATE Patients SET PhoneNumber = '9999999999' WHERE PatientID = 1;

-- 4. Select Query
SELECT * FROM Doctors WHERE Specialty = 'Cardiology';

-- 5. Aggregate Query 1
SELECT COUNT(*) AS TotalAppointments FROM Appointments;

-- 6. Aggregate Query 2
SELECT ServiceID, SUM(TotalAmount) AS Revenue FROM Invoices GROUP BY ServiceID;

-- 7. Join Query 1
SELECT Patients.FirstName, Patients.LastName, Doctors.FirstName AS DoctorName, AppointmentDate 
FROM Appointments
JOIN Patients ON Appointments.PatientID = Patients.PatientID
JOIN Doctors ON Appointments.DoctorID = Doctors.DoctorID;

-- 8. Join Query 2
SELECT Appointments.AppointmentID, Services.ServiceName, Invoices.TotalAmount
FROM Appointments
JOIN Services ON Appointments.ServiceID = Services.ServiceID
JOIN Invoices ON Appointments.AppointmentID = Invoices.AppointmentID;
