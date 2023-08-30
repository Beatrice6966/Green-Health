<?php
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'greenhealth');

// Check if the connection was successful
if ($db->connect_error) {
  die('Connection error: ' . $db->connect_error);
}

// Get the information from the user
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$location = $_POST['location'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert the information into the database
$sql = "INSERT INTO checkout_info (fname, lname, location, email, phone) VALUES ('$fname', '$lname', '$location', '$email', '$phone')";
$result = $db->query($sql);

// Check if the query was successful
if ($result) {
  echo '';
} else {
  echo 'The information was not inserted successfully: ' . $db->error;
}

// Close the connection
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
<div class="p-3 mb-2 bg-primary text-white"><center> Thank you! We will reach out very soon</center></div>

</body>

</html>
