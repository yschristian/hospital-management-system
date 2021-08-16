<?php 

include('dashboard/db_connect.php');
// write query 
$sql = 'SELECT * FROM messages ';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="boot.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 style="color:green"> <b>Hospital Dashboard</b></h3> <br> <br>

  <a href="hospitaldash.php" class="w3-bar-item w3-button">home</a>
  <a href="#" class="w3-bar-item w3-button">Doctors</a>
  <a href="messages.php" class="w3-bar-item w3-button">Messages</a>
  <a href="appointments.php" class="w3-bar-item w3-button">Appointment</a>
  <a href="#" class="w3-bar-item w3-button">Department</a>
  <a href="patient.php" class="w3-bar-item w3-button">patient</a>
  <a href="#" class="w3-bar-item w3-button">Approval</a>
  <a href="#" class="w3-bar-item w3-button">settings</a> 
 <button><a href="logout.php" class="w3-bar-item w3-button">log out</a></button>

  <!-- Page Content -->
</div>
<div style="margin-left:20%">
<div class="w3-container w3-teal">
  <h1>Hospital Management System</h1>
  </div>
</div>
</div>


  


</body>
</html>
