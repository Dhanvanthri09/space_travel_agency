<?php
$servername = "localhost";
$username = "root"; // Default in XAMPP
$password = "";
$dbname = "galactic_travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$destination = $_POST['destination'];
$travel_date = $_POST['date'];
$passengers = $_POST['passengers'];

// Insert into database
$sql = "INSERT INTO bookings (name, email, destination, travel_date, passengers)
        VALUES ('$name', '$email', '$destination', '$travel_date', '$passengers')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Booking Successful!'); window.location='view_bookings.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
