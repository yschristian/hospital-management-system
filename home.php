<html>
<head>
	<style>
		body{
		background:  aliceblue;		
	
		}
		.yolla{
			display: flex;
			flex-wrap: nowrap;
		}

		.yolla img{
			width: 100%;
			height: 500px;
			 margin-left: 40px;
			
		}
		.slider{
		width:900px;
		height:500px;
		background: url("pict/m1.jpg");
		margin-right:100px auto;
			animation: slide 10s infinite;
	
			
		}
		@keyframes slide{
			25%{
				background: url("pict/m1.jpg");
			}
		    50%{
				background: url("pict/CATH-LAB.jpg");
			}
			75%{
				background: url("pict/cathe.jpg");
			}100%{
				background: url("pict/hos2.jpg");
			}
		}
		.main-nav{
			
			 list-style: none;
		text-decoration: none;
		text-align: right;
		background: rgb(0,100,0);
			
		}
		.main-nav li{
			display: inline-flex;
			margin: 15px;
			padding:15px;
				
		}
		.main-nav li a
		{
			color:white;
			padding:5px 20px;
            font-family :"robot",sans-serif;
             font-size:25px;
				text-decoration: none;
		}
		.main-nav li a:hover{
			background-color: green;
		}
		.z{
			color: black;
			font-size: 30px;
			text-align: left;	
		}
		.grid-container{
			display: grid;
			grid-template-columns: auto auto;
			color: white;
			
		}

		

		input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
		}

		.footer{
			background-color: darkslategrey;
		}
		.cont{
			
			width:25%;
			float: right;
			margin-right: 100px;
		}.chris{
			width: 25%;
			text-align: right;
			margin-right: 100px;
		
		}
		.pull-right{
			color:white;
		}
		.ok{
			position: fixed;
			width: 100PX
		}
		

		
		.main1{
			float:right;
			margin-right: 20px;
		}
				.sub{
			display:none;
		}
		.yees li a:hover.sub{
			display: block;
			position:absolute;
			margin-top:15px;
			margin-left:-15px;
			background: rgb(0,100,0);
		}
		.yees li a:hover.sub ul{
				display: block;
			    margin: 10px;
		}
		.yees li a:hover .sub ul li{
			width: 150px;
			padding: 10px;
			background: transparent;
			text-align:left;
			
		}
	</style>


	</head>

<body> 
	
	<center><h1>Hospital Management Systems</h1></center>

	
		 <ul class="main-nav">

<li><a href="Home.php">Home</a></li>
<li><a href= "About.php">about</a></li>
<li><a href="Department.php">Department</a></li>
<li><a href="login.php">log in</a></li>
			  <div class="sub">
	<ul>
	     <li><a href="#">Patient</a></li>
		<li><a style="#" href="login admin.php"> Admin </a></li>
	
	</ul>
		</div>
<li><a href="contact.php">contact us</a></li>
</ul>
		</div>
	
 <font class="z">
	More choices,<br>
	better healthcare</b></font>

	
		
	<div class="yolla">
		<div class="slider"></div>
		<div class="tech">
			<img id="doc" src="pict/male.jpg" alt="img">
		</div>
	</div>
		
		
		<!-- Footer -->
		
		<div class="footer">
  <footer >  
	  
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
	      
		
	
			  
			  
        <div >
		<div > 
		<a title="Privacy Policy" href="privacy.php" style="text-decoration: none;color:aliceblue"> Privacy Policy </a>
		<a title="Terms of Use" href="terms-of-use.php" style="text-decoration: none;color:aliceblue"> Terms of Use</a>
		<a title="Contact Us" href="contact.php" style="text-decoration: none;color:aliceblue">Contact Us</a>
		</div> <br><br>
		 <span class="pull-right">Copyright 2021 &copy; YUBAHWE SHEMA Christian(YCS). All Rights Reserved. </span>       
</div>

</footer>
</div>
	<script>
		var img = document.getElementById("doc");
		img.addEventListener('mouseover', () => {
			img.attributes.getNamedItem("src").value = "pict/new1.png";
		});

		img.addEventListener('mouseout', () => {
			img.attributes.getNamedItem("src").value = "pict/male.jpg";
		});

		console.log()
	</script>
</body>
	</html>