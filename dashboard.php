<?php
session_start();

require 'db.php';
$query = "SELECT contact_id FROM contactdetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
	
?>
<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id = "main">
  <h1> Phone Book</h1>
  <?php 
  
  include_once 'index.php';
  ?>
  

 <div class=" totalcontact"> <p>Total users in your contacts<br> <?php echo '<span>'. $row.'</span>';?></p></div>
  <div class= "addnew"><a href="adduser.php"></a> </div> 
  <div class= "viewusers"><a href="viewuser.php"></a> </div> 
  
  
</div>
</body>
</html>