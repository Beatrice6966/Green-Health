<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script>
     $(function() {
        $("#includeHtml").load("cart.html");
     });
  </script>
 
    </head>
<body>
    
<div id="includeHtml"></div> 
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
   
        <p><a href="logout.php">Logout</a></p>
    
    </div>
    <?php readfile ("services.html"); ?>
</body>
</html>
<!-- -->

