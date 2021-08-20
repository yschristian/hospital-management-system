<?php 
include('dashboard/db_connect.php');



  $sql = 'SELECT * FROM accounts';

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);
  
  // fetch the resulting rows as an array
  $accounts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
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
  <a href="doctor.php" class="w3-bar-item w3-button">Doctors</a>
  <a href="messages.php" class="w3-bar-item w3-button">Messages</a>
  <a href="appointments.php" class="w3-bar-item w3-button">Appointments</a>
  <a href="#" class="w3-bar-item w3-button">Department</a>
  <a href="#" class="w3-bar-item w3-button">patient users</a>
  <a href="#" class="w3-bar-item w3-button">Approval</a>
  <a href="#" class="w3-bar-item w3-button">settings</a> 
 <button> <a href="logout.php" class="w3-bar-item w3-button">log out</a></button>

  <!-- Page Content -->
</div>
<div style="margin-left:20%">
<div class="w3-container w3-teal">
  <h1>Patient Users</h1>
  </div>
</div>
</div>
<table style="padding: ;width:70%;margin-left:270px">
		   <tr style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">>
		   <th style="font-family:  sans-serif">id</th>
	   	 <th style="font-family:  sans-serif">firstname</th>
	   	 <th style="font-family:  sans-serif">lastname</th>
		   <th style="font-family:  sans-serif">email</th>
		   <th style="font-family:  sans-serif">gender</th>
         <th style="font-family:  sans-serif">nationality</th>
         <th style="font-family:  sans-serif">birthday</th>
         <th style="font-family:  sans-serif">passwords</th>
         <th style="font-family:  sans-serif">confirm</th>
         <th style="font-family:  sans-serif">time</th>

         <th style="font-family:  sans-serif" colspan=3 >Action</th>

	
</tr>

 <?php foreach($accounts as $account): ?>
	<tr  style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">
        <td style="width: 20px;"><?php echo $account['id'] ?></td>
        <td style="width:20px; " ><?php echo $account['firstname'] ?></td>
        <td style="width:20px; "><?php echo $account['lastname'] ?></td>
        <td style="width:20px; "><?php echo $account['email'] ?></td>
        
        <td style="width:20px; "><?php echo $account['gender'] ?></td>
        <td style="width:20px; "><?php echo $account['nationality'] ?></td>
        <td style="width:20px; "><?php echo $account['birthday'] ?></td>
        <td style="width:20px; "><?php echo $account['passwords'] ?></td>
        <td style="width:20px; "><?php echo $account['confirm'] ?></td>
		    <td style="width:20px; "><?php echo $account['created_at'] ?></td>

    <td style="width:20px; "><a href="details.php?id=<?php echo $account['id'];?>">View</a></td>
    <td style="width:20px; "><a href="delete.php?id=<?php echo $account['id'];?>"> Delete</a></td>
    <td style="width:20px; "><a href="update.php?id=<?php echo $account['id'];?>">Update</a></td>

 </tr>
 <?php endforeach; ?>
 </table>
</body>
</html>
