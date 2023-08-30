<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    
    $con = mysqli_connect("localhost","root","","greenhealth");
    // $con= mysqli_connect("sql207.infinityfree.com", "if0_34857740", "i4MbqWuam2m", "if0_34857740_greenhealth");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
