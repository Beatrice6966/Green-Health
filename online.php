<?php



$conn = mysqli_connect('localhost', 'root', '', 'greenhealth');
// $conn = mysqli_connect("sql207.infinityfree.com", "if0_34857740", "i4MbqWuam2m", "if0_34857740_greenhealth");
if ($conn) {
  // Get the form data
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $minutes = $_POST['minutes'];
  $consultation = $_POST['consultation'];
  $specialist = $_POST['specialist'];
  $file = $_POST['file'];

  // Prepare the SQL statement
  $sql = "INSERT INTO appointments (address, phone, date, time, minutes, consultation, specialist, file) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);

  // Bind the parameters
  mysqli_stmt_bind_param($stmt, 'ssssssss', $address, $phone, $date, $time, $minutes, $consultation, $specialist, $file);

  // Execute the statement
  mysqli_execute($stmt);

  // Close the statement
  mysqli_stmt_close($stmt);

  // Close the connection
  mysqli_close($conn);
} else {
  echo 'Error connecting to database';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="p-3 mb-2 bg-primary text-white"><center>Pay the Amount using LIPA number<b> 35196645</b></center></div>
<div class="p-3 mb-2 bg-primary text-white"><center>Name<b> GREEN HEALTH</b></center></div>
<div class="p-3 mb-2 bg-primary text-white"><center>Send the Transaction Message through the Number<b> 0744721367 </b></center></div>
    <p><div class="p-3 mb-2 bg-primary text-white" > <center> Thank you We will Reach out soon</center></div></p>
</body>
</html>