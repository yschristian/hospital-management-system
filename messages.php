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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 style="color:green"><b>Hospital Dashboard</b></h3><br>
  <a href="hospitaldash.php" class="w3-bar-item w3-button">home</a>
  <a href="#" class="w3-bar-item w3-button">Doctors</a>
  <a href="#" class="w3-bar-item w3-button">Messages</a>
  <a href="appointments.php" class="w3-bar-item w3-button">Appointments</a>
  <a href="#" class="w3-bar-item w3-button">Department</a>
  <a href="patient.php" class="w3-bar-item w3-button">patient users</a>
  <a href="#" class="w3-bar-item w3-button">Approval</a>
  <a href="#" class="w3-bar-item w3-button">settings</a> 
 <button> <a href="logout.php" class="w3-bar-item w3-button">log out</a></button>

  <!-- Page Content -->
</div>
<div style="margin-left:20%">
<div class="w3-container w3-teal">
  <h1>Hospital Management System</h1>
  </div>
</div>
</div>
<table style="padding: ;width:70%;margin-left:270px">
		 <tr style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">>
		 <th style="font-family:  sans-serif">fname</th>
		 <th style="font-family:  sans-serif">Phone</th>
		 <th style="font-family:  sans-serif">email</th>
		 <th style="font-family:  sans-serif">sms</th>
		 <th style="font-family:  sans-serif">time</th>
     <th style="font-family:  sans-serif" colspan=2>Action</th>
</tr>

 <?php foreach($messages as $message): ?>
	<tr  style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">
        <td style="width: 20px;"><?php echo $message['fname'] ?></td>
        <td style="width:20px; " ><?php echo $message['phone'] ?></td>
        <td style="width:20px; "><?php echo $message['email'] ?></td>
        <td style="width:20px; "><?php echo $message['sms'] ?></td>
        <td style="width:20px; "><?php echo $message['created_at'] ?></td>
        <td style="width:20px; "><a href="details.php?id=<?php echo $account['id'];?>">View</a></td>
       <td style="width:20px; "><a href="delete.php?id=<?php echo $account['id'];?>"> Delete</a></td>
      
 </tr>
 <?php endforeach; ?>



</body>
</html>
