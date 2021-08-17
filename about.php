<html>
<head>
	
<style>
	body {
		background-image: url("pict/town.jpg") ;
		
	}
	.rex 
	{
	   
		float: right;
	}
	.rapp
	{
	 list-style: none;
		text-decoration: none;
		text-align: right;
		background: rgb(0,100,0);
		
	}
	.rapp li
	{
		display: inline-flex;
		margin:15px;
		padding:15px;
	}
	.rapp li a{
		color:white;
text-decoration:none;
padding:5px 20px;
font-family :"robot",sans-serif;
font-size:25px;
	}
	.rapp li a:hover{
	 background-color:green 
	}
	.grid-container{
		 display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto  auto auto;
		
	}
	.gau{
		background:#D7DBDD ;
		border-radius:10%; 
		margin-left: 70px;
		padding: 20px 0px
	}
	.gau1{
		background:#D7DBDD ;
		border-radius:10%; 
		margin-left: 100px;
		padding: 20px 0px
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


<body>
    

<div> 
	
<h1 style="text-align: center">Hospital Management Systems</h1>
	<ul class="rapp">
		
<li><a href="Home.php">Home</a></li>
<li><a href="About.php">about</a></li>
<li><a href="Department.php">Department</a></li>
<li><a href="login.php">log in</a></li>
<li><a href="contact.php">contact us</a></li>
</ul>
	<br><br><br>

</div>
<center>
<div class="grid-container" >
	
	<div class="gau">
 <header style="color: black" ><b>Our Vision</b></header>

<img src="pict/vision.png">
 <p style="color: black">Our Vision is to be a modern healthcare platform for care givers <br>and general public to manage their medical records and <br> access it anywhere anytime on any devices.<br>A center of excellence in health service provision, clinical education and research.</p>
	
	</div>
	
	<div class="gau1">
		<header style="color: black"><b>Our Commintment</b></header>
		<img src="pict/commitment.png">
    <p style="color: black">Service and support is at the heart of what we do.<br> As a true subscription based solutions vendor, we know the <br>importance of keeping our customers happy.
		</p>
	</div>
	
</div>
	 </center>
	
	<div class="footer">
  <footer >  
	  
	 <nav class="main1">
		  <header style="color:white;margin-left: 40px"><b>Quick Link</b></header> 
			<dl>	
			  <dd><a href="Home.php"  style="color:white;text-decoration: none">-Home</a></dd>
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
	      
		
			  
			  
			  
          <div>
		<div> 
		<a title="Privacy Policy" href="privacy.html" style="text-decoration: none;color:aliceblue"> Privacy Policy </a>
		<a title="Terms of Use" href="terms-of-use.html"style="text-decoration: none;color:aliceblue"> Terms of Use</a>
		<a title="Contact Us" href="contact.html" style="text-decoration: none;color:aliceblue">Contact Us</a>
		</div> <br><br>
		 <span class="pull-right">Copyright 2021 &copy; YUBAHWE SHEMA Christian(YCS). All Rights Reserved. </span>       
</div>

</footer>
</div>
</body>
</html>
