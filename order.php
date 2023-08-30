<?php
// Create a connection to the MySQL database
$conn = new mysqli("localhost", "root", " ", "greenhealth");

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the data from the form
$name = $_POST["name"];
$medication_name = $_POST["medication_name"];
$location = $_POST["location"];
$phone = $_POST["phone"];
$file = $_POST["file"];

// Insert the data into the database
$sql = "INSERT INTO searched_medicines (name, medication_name, location, phone, file) VALUES ('$name', '$medication_name', '$location', '$phone', '$file')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Thank you! We will reach out soon</h1>";
} else {
  echo "Error: " . $conn->error;
}

// Close the connection to the database
$conn->close();
?>
