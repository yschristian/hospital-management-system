<?php
session_start();
  	$errors = array('login' => '', 'email' => '', 'password' => '', 'incorrect' => '');
if(isset($_POST['submit'])){
	if(empty($_POST['login'])){
		$errors['login'] = 'You must choose between admin and patient';}
	if(empty($_POST['uname'])){
		$errors['username'] = 'password is required';}
	if(empty($_POST['psw'])){
		$errors['password'] = 'An password is required';}
  $person = $_POST['login']??"";
  $email = $_POST['uname'];
  $password =$_POST['psw'];
  if($person == 'admin'){
	if($email ==='yubahwe500@gmail.com' && $password === 'admin250')
	{

		$_SESSION['email']=$email;
		header('location:hospitaldash.php');
	  }else{
		$errors['incorrect'] ='Username Or Password is incorrect!';
	  }

  } else if($person == 'patient'){
	include('dashboard/db_connect.php');
	// write query 
	$sql = "SELECT id FROM accounts WHERE email = '$email'";

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1)
	{
		if($row=mysqli_fetch_assoc($result))
		{
			if(password_verify($password,$row['passwords']))
			{
				$_SESSION['email']=$email;
                $sql="SELECT* FROM accounts WHERE email='$email'";
                $result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					if($row=musqli_fetch_assoc($result))
					{

					}
					
				}

				header('location:appointme.php');
			}
		}
	}
	// fetch the resulting rows as an array
	$account = mysqli_fetch_all($result, MYSQLI_ASSOC);


	// check how many results
	$count = mysqli_num_rows($result);

 // If result matched $my email and $mypassword, table row must be 1 row
	if($count == 1) {	
		$_SESSION['email']=$email;
		$id=$row['id'];
		header("location:appointme.php?id=$id");
		}else {
		$error = "Your Username or Password is invalid";
		 }
	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

  }
}

?>




<html>
<head>
    <style>
		body{
			background: grey;
		}
		.yees{
			text-decoration: none;
			list-style:none;
             margin-top:30px;
	         text-align: right;
			background: rgb(0,100,0);
}	
		.yees li
		{
			display: inline-flex;
			margin:15px;
			padding:15px;
			
		}	
		.yees li a
		{
color:white;
text-decoration:none;
padding:5px 20px;
font-family :"robot",sans-serif;
font-size:25px;
			
		}
		.yees li a:hover{
			background-color:green;
		}
		.dinello
		{
			display: inherit;
		/*background: #f1f1f1;*/
			box-shadow: 10 px;
		    border: 1px solid black;
		}
		.nav
		{
			width: 40%;
			padding:15px;
			margin:5px 0 22px 0;
		}
		.re:hover{
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
</head>


<body style="background-color: aliceblue;">
    
<h1 style="text-align: center">Hospital Management Systems</h1>

<ul class="yees">
	
<li><a href="Home.php">Home</a></li>
<li><a href="About.php">about</a></li>
<li><a href="Department.php">Department</a></li>

<li><a href="login.php">log in</a></li>
<li><a href="contact.php">contact us</a></li>
	
</ul>
	<center>
<form action="login.php" method="POST">
 
	<div class="dinello">

	<input type="radio" name="login" value="admin">
    <label for="admin">Admin</label>

    <input type="radio" name="login" value="patient">
    <label for="patient">Patient</label><br><br>
	<p style="color:red"><?php echo $errors['login']; ?></p>
 <label for="uname"> <b>Email: </b></label>
	<input type="text" placeholder="User Name" name="uname" class="nav"><br><br>
	<p style="color:red"><?php echo $errors['email']; ?></p>
	<label for="psw" ><b>PassWord:</b> </label>
	<input type="password" placeholder="Enter Password" name="psw" class="nav"><br><br>
	<p style="color:red"><?php echo $errors['password']; ?></p>
		<div> 
		<p style="color:red"><?php echo $errors['incorrect']; ?></p>

	<button class="re" type="submit" name="submit" style="margin-right  :20px;cursor: pointer;padding: 10px;margin-left: 100px;"><b>Log in</b></button>
			
	<button class="re" type="submit" style="margin-right :20px;padding: 10px"><a href="createaccout.php" style="text-decoration:none;color: black;">Create New Account</a> </button>
	
	<button class="re" type="submit" style="padding: 10px"><b>Reset your password</b></button>
		
			
		</div>
	
	</div>
    </form>
	</center>

	
		
		<div class="footer">
  <footer >  
	  
	 <nav class="main1">
		  <header style="color:white;margin-left: 40px">Quick Link</header> 
			<dl>	
			  <dd><a href="Home.php"  style="color:white;text-decoration: none;">-Home</a></dd>
			  <dd><a href= "About.php"  style="color:white;text-decoration: none;">-about</a></dd>
			  <dd><a href="Department.php"  style="color:white;text-decoration: none;">-Department</a></dd>
			  <dd><a href="login.php"  style="color:white;text-decoration: none;">-log in</a></dd>			
			  					
              <dd><a href="createaccout.php"  style="color:white;text-decoration: none;">-create account</a></dd>
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