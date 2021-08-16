<?php

	include('dashboard/db_connect.php');

	$email = $fname = $phone= $messages ='';

	if(isset($_POST['submit'])){
			$fname = mysqli_real_escape_string($conn, $_POST['fname']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$phone = mysqli_real_escape_string($conn, $_POST['phone']);
			$messages = mysqli_real_escape_string($conn, $_POST['messages']);
			// create sql
			$sql = "INSERT INTO messages(fname,email,phone,sms) VALUES('$fname','$email','$phone','$messages')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
		echo 'your message sent successfully';
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
			
	} // end POST check

?>



<html>
<head>
    <link ref="stylesheet" href="pract.css">
</head>
<style>
	body{
		background:aliceblue;
		background:url("pict/fe.jpg");
	
	}
	.tato
	{
		text-align: right;
		background: rgb(0,100,0)
			
	}
	.tato li{
		display: inline-flex;
		margin: 15px;
		padding:15px;
	}
	.tato li a{
		color:white;
text-decoration:none;
padding:5px 20px;
font-family :"robot",sans-serif;
font-size:25px;

	}
	.tato li a:hover{
		background-color: green;
	}
	.nav1{
		width: 23%;
			padding:15px;
			margin:5px 0 22px 0px;
			font-size:18px;
			outline:none;
	}
	.nav2{
		
		width: 50%;
			padding:15px;
			margin:5px 0 22px 0px ;
			font-size:18px;
			outline:none;
	} 
	.nav3{
		width: 50%;
		margin-left: 50px;
		padding:15px;
		font-size:18px;
		outline:none;
	}
	.toka{
		float: left;
		margin-left: 300px;
	}

	button:hover
	{
		background-color: green;
}
	
		.footer{
			background-color: darkslategrey;
		}
		
		.main1{
			float:right;
			margin-right: 20px;
		}
			.grid-container{
			display: grid;
			grid-template-columns: auto auto;
			color: white;
			
		}
				.pull-right{
			color:white;
		}
</style>

<body>
	
    <center>
<h1>Hospital Management Systems</h1>

    <div class="cr">
<ul class="tato"> 
<li><a href="Home.php">Home</a></li> 
 <li><a href="About.php">about</a></li>
 <li><a href="Department.php">Department</a></li>
 <li><a href="login.php">log in</a></li>
<li><a href="contact.php">contact us</a></li>
</ul>

</div>
	
		<p> <b>Contact us: +250784381529</b></p>
        <p><b>Email us: yschristian7@gmail.com</b> </p> <br>
		
		
		
		 <p>Feedback to us . We will get back to you as soon as possible.</p><br>
		
		<form class="site" action="contact.php" method="POST"> 
		<div>
			
		<label for="nme" >Name:</label>
			
		<input type="text" placeholder="please provide your name" name="fname" class="nav2" required><br> <br>
		<label for="email">Email:</label>
		<input type="text" placeholder="please provid email contact" name="email" class="nav1" >
	    <label for="mobile">Mobile:</label>
			
		<input type="text" placeholder="please provide your mobile number" name="phone" class="nav1" required><br><br>
			
		<label for="mssg" class="toka" >Message:</label> <br>
		<textarea class="nav3" name="messages" placeholder="message to be conveyed to us!"></textarea><br><br>
			
			<button type="submit" name="submit" style="padding:5px;cursor:pointer;background-color: white; "><b>Submit</b></button>
			
			</div>	
		</form>

</center>
	
		
		<div class="footer">
  <footer class="container-fluid" id="footer-home">  
	  
	 <nav class="main1">
		  <header style="color:white;margin-left: 40px">Quick Link</header> 
			<dl>	
			  <dd><a href="Home.php"  style="color:white;text-decoration: none" >-Home</a></dd>
			  <dd><a href= "About.php"  style="color:white;text-decoration: none">-about</a></dd>
			  <dd><a href="Department.php"  style="color:white;text-decoration: none">-Department</a></dd>
			  <dd><a href="login.php"  style="color:white;text-decoration: none">-log in</a></dd>								
              <dd><a href="createaccout.php"  style="color:white;text-decoration: none">-create account</a></dd>
			  </dl>
			</nav>
	  
			   <div>
		<p style="color:white"> <b>Our services</b></p>
		<ul class="grid-container"> 
				
		    <li><a href="ortho.php" style="text-decoration: none;color: aliceblue">Orthopedics</a></li>
			<li>
				<a href="general.php"style="text-decoration: none;color: aliceblue">General Surgery</a>
			</li>
			<li>
				<a href="card.php"style="text-decoration: none;color: aliceblue">Cardiology</a>
			</li>
			<li>
				<a href="obs.php"style="text-decoration: none;color: aliceblue">Obstetrics & Gynaecology</a>
			</li>
			<li>
				<a href="img.php"style="text-decoration: none;color: aliceblue">Imaging services</a></li>
			<li>
				<a href="cardio.php"style="text-decoration: none;color: aliceblue">Cardiothoracic</a></li>
			<li>
				<a href="ear.php"style="text-decoration: none;color: aliceblue">Ear, Nose & Throat</a>
			</li>
			<li><a href="neur.php"style="text-decoration: none;color: aliceblue">Neurosurgery</a></li>
	
		</ul>
	  </div>
	      
		
			  
			  
			  
        <div class="row">
		<div class="col-md-4"> 
		<a title="Privacy Policy" href="privacy.php" style="text-decoration: none;color:aliceblue"> Privacy Policy </a>
		<a title="Terms of Use" href="terms-of-use.php" style="text-decoration: none;color:aliceblue"> Terms of Use</a>
		<a title="Contact Us" href="contact.php" style="text-decoration: none;color:aliceblue">Contact Us</a>
		</div> <br><br>
		 <span class="pull-right">Copyright 2021 &copy; YUBAHWE SHEMA Christian(YCS). All Rights Reserved. </span>       
</div>

</footer>
</div>
</body>
	</html>