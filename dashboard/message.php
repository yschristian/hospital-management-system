<?php 

	include('db_connect.php');

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
</head>
<body>
	<center><p  style="font-family:  sans-serif"><b>Mssages from my patients</b></p>



	<table style="width:50%;height:100%">

		 <tr style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">
		 <th style="font-family:  sans-serif">fname</th>
		 <th style="font-family:  sans-serif">Phone</th>
		 <th style="font-family:  sans-serif">email</th>
		 <th style="font-family:  sans-serif">sms</th>
		 <th style="font-family:  sans-serif">time</th>
	
</tr>

 <?php foreach($messages as $message): ?>
	<tr  style="margin:auto; padding:40px; background-color:green;color:white;width:50%;">
        <td style="width: 20px;"><?php echo $message['fname'] ?></td>
        <td style="width:20px; " ><?php echo $message['phone'] ?></td>
        <td style="width:20px; "><?php echo $message['email'] ?></td>
        <td style="width:20px; "><?php echo $message['sms'] ?></td>
		<td style="width:20px; "><?php echo $message['created_at'] ?></td>
 </tr>
 <?php endforeach; ?>
 </center>
</body>
</html>