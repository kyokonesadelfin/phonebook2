<?php
require_once 'db.php';
$query = "SELECT contact_id FROM contactdetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
?>
<div class="menu">  
   <ul>
      <li><a href="dashboard.php">Home</a></li>
      <li><a href="adduser.php">Add New</a>
      <li><a href="edit.php">Edit</a>
      <li><a href="viewuser.php">View All</a><?php echo '<p class= "count">'.$row.'</p>';?>
      
   </ul>
</div>  