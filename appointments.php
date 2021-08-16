<?php 

include('dashboard/db_connect.php');
// write query 
$sql = 'SELECT * FROM appointments';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$appointments = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="boot.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" class="sidebar" style="width:20%">


 
  <div >
  <a href="hospitaldash.php" class="w3-bar-item w3-button">home</a>
  <a href="#" class="w3-bar-item w3-button">Doctors</a>
  <a href="messages.php" class="w3-bar-item w3-button">Messages</a>
  <a href="#" class="w3-bar-item w3-button">Appointments</a>
  <a href="#" class="w3-bar-item w3-button">Department</a>
  <a href="patient.php" class="w3-bar-item w3-button">patient users</a>
  <a href="#" class="w3-bar-item w3-button">Approval</a>
  <a href="#" class="w3-bar-item w3-button">settings</a> 
 <button><a href="logout.php" class="w3-bar-item w3-button">log out</a></button>

 </div>
  <!-- Page Content -->
</div>
<div style="margin-left:20%">
<div class="w3-container w3-teal">
  <h1>Hospital Management System</h1>
  </div>
</div>
</div>

<table style="width:70%;margin-left:270px;border:1px solid white">

		 <tr style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">

		 <th style="font-family:  sans-serif">appoint_id</th>
		 <th style="font-family:  sans-serif">fname</th>
     <th style="font-family:  sans-serif">birthday</th>
     <th style="font-family:  sans-serif">gender</th>
     <th style="font-family:  sans-serif">province</th>
     <th style="font-family:  sans-serif">district</th>
     <th style="font-family:  sans-serif">email</th>
     <th style="font-family:  sans-serif">phone</th>
		 <th style="font-family:  sans-serif">depa_name</th>
         <th style="font-family:  sans-serif">sickness</th>
         <th style="font-family:  sans-serif">test</th>
         <th style="font-family:  sans-serif">time</th>
    
         <th style="font-family:  sans-serif" colspan=4>Action</th>
	
</tr>

 <?php foreach($appointments as $appointment): ?>
	<tr  style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">
        <td style="width: 20px;"><?php echo $appointment['appoint_id'] ?></td>
         <td style="width:20px; " ><?php echo $appointment['fname'] ?></td>
         <td style="width:20px; "><?php echo $appointment['birthday'] ?></td>
         <td style="width:20px; "><?php echo $appointment['gender'] ?></td>
         <td style="width:20px; "><?php echo $appointment['province'] ?></td>
         <td style="width:20px; "><?php echo $appointment['district'] ?></td>
         <td style="width:20px; "><?php echo $appointment['email'] ?></td>
         <td style="width:20px; "><?php echo $appointment['phone'] ?></td>
         <td style="width:20px; "><?php echo $appointment['depa_name'] ?></td>
          <td style="width:20px; "><?php echo $appointment['sickness'] ?></td>
          <td style="width:20px; "><?php echo $appointment['test'] ?></td>
          <td style="width:20px; "><?php echo $appointment['created_at'] ?></td>



         <td style="width:20px; ">View</td>
         <td style="width:20px; "><a href="appointments.php?id=<?php echo $appointment['appoint_id']; ?>">Delete</a></td>
         <td style="width:20px; ">Update</td>
         <td style="width:20px; ">Approval</td>
 </tr>
 <?php endforeach; ?>
 </table>
</body>
</html>
