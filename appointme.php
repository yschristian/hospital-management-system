
<?php
session_start();
// ini_set("SMTP","ssl:smtp.gmail.com" );

// // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
// ini_set("smtp_port","25");

// // Please specify the return address to use
// ini_set('sendmail_from', 'nshimiyimanaamani2@gmail.com');


if(!isset($_SESSION['email']))
{
  header("Location: home.php");
  exit();
}
$conn = mysqli_connect('localhost', 'yubahwe', '1234', 'hospital');

$fname= $birthday=$gender=$province=$district= $email=$phone=$depa_name=$sickness=$test='';
 if(isset($_POST['submit']))
 {
                  $province=  mysqli_real_escape_string($conn, $_POST['Province']);
                $district=  mysqli_real_escape_string($conn, $_POST['District']);
               $email=  mysqli_real_escape_string($conn, $_POST['email']);
         $phone=  mysqli_real_escape_string($conn, $_POST['phone']);
           $depa_name= mysqli_real_escape_string($conn, $_POST['department']);
             $sickness= mysqli_real_escape_string($conn, $_POST['sickness']);
               $test=  mysqli_real_escape_string($conn, $_POST['test']);


	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
else{
	
	
//  $fname= $_SESSION['fname'];
//   $lname= $_SESSION['lname'];
//  $birthday= $_SESSION['birthday'];
//   $gender= $_SESSION['gender'];
$id=$_GET['id'];
$student="SELECT * FROM accounts WHERE id=\"$id\"";
											$school=$conn->query($student)or trigger_error($conn->error);
											while ($row = $school->fetch_assoc()) {
													    $fname=$row['firstname'];
                              $lname=$row['lastname'];
                              $fullname=$fname."".$lname;
                              $birthday=$row['birthday'];
                              $gender=$row['gender'];
                              $email=$row['email'];
												}

  $fullname=$fname." ".$lname;
$sql = "INSERT INTO appointments (fname	,	birthday,	gender,	province,district	,email,phone,depa_name,	sickness,test)
VALUES ( '$fullname','$birthday','$gender','$province','$district','$email','$phone','$depa_name','$sickness','$test')";

 

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

  
//  // the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// mail($email,"My subject",$msg);
  
 



} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body{
        background-image:url("pict/gake.jpg") ;
    }
    .depa{
        margin-left:50px;
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
        .grid-container{
			display: grid;
			grid-template-columns: auto auto;
			color: white;
			
		}
        
		.main1{
			float:right;
			margin-right: 20px;
		}
 form{
   background-color: green;
   border-radius: 45px;
   box-shadow: opx 15px 20px black;
 }
    
 input[type=text], input[type=tel]{
   border-radius: 15px;
   outline: none;

 }
.reka:hover{
  background-color:green;
 }
	
</style>
    </head>
  <body>

    
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
    
    <a href="logout.php" class="w3-bar-item w3-button" style="text-transform: uppercase;color:green">log out</a>
  </div>
  
  <!-- Page Content -->
  <div style="margin-left:25%">
    <h1 style ="text-align: center;color: green;"><b>Make Appointment!</b> </h1>
    <div class="depa">

    <form  method="POST">
      <center>
   <div class="container">
        
<!-- 
    <label for="lname" style="color:white"><b>Last Name:</b> </label><br>
    <input type="text" name="fname" style="width:30%;padding:10px" required><br>
    <br> -->


    


      <label for="Province" style="color:white" > <b>Province:</b></label><br>
      <input type="text" name="Province" style="width:30%;padding:10px" required><br>

     <label for="district" style="color:white"><b>District:</b></label><br>
     <input type="text" name="District" style="width:30%;padding:10px" required><br>

    
    <label for="email" style="color:white"><b></b>Email: </label><br>
    <input type="text" name="email" style="width:30%;padding:10px"> <br>
      
    <label for="email" style="color:white"><b>Phone:</b> </label><br>
    <input type="text" name="phone" style="width:30%;padding:10px" requred> <br>

     <label for="Department" style="color:white"><b>Department</b></label> <br>

    <select name="department" id="" style="width:30%;padding:10px;   border-radius: 15px;">
        <option value="Orthopedics ">Orthopedics</option>
        <option value="General Surgery ">General Surgery</option>
        <option value="Cardiology">Cardiology</option>
        <option value="Obstetrics & Gynaecology">Obstetrics & Gynaecology</option>
        <option value="Imaging services">Imaging services</option>
        <option value="Cardiothoraci">Cardiothoracic</option>
        <option value="Ear, Nose & Throat">Ear, Nose & Throat</option>
        <option value="Neurosurgery">Neurosurgery</option>
    </select><br> <br> <br>
  </div>

  <label for="sickness" style="color:white"><b>Sickness:</b></label> <br>
    <textarea name="sickness"  type="text" placeholder="your sickness" style="  border-radius: 15px;width:30%;font-size: 18px;outline-style:none;" required></textarea><br>

    <label for="Test" style="color:white"><b>Test:</b></label> <br>
    <textarea name="test" type="text" placeholder="medical test if there is!" style="border-radius: 15px;width:30%;font-size: 18px; outline-style:none;" not required></textarea><br><br>

    <input type="submit"  name="submit" value="send">
  </center>
    </form>
</div>
  </div>



  









<!-- 
    <h1 style ="text-align: center;"> Make Appointment</h1>
    <div class="depa">
    <form >
  
        <label for="fname">First Name: </label><br> <br>
    <input type="text" name="fname" style="width:20%;padding:10px"><br>

    <label for="lname">Last Name: </label><br>
    <input type="text" name="fname" style="width:20%;padding:10px"><br>


    
    <label for="email">Email: </label><br>
    <input type="text" name="email" style="width:20%;padding:10px"> <br>
    
<label for="Department">Department</label> <br>

    <select name="Department" id="" style="width:20%;padding:10px">
        <option value=" ">Orthopedics</option>
        <option value=" ">General Surgery</option>
        <option value=" ">Cardiology</option>
        <option value=" ">Obstetrics & Gynaecology</option>
        <option value=" ">Imaging services</option>
        <option value=" ">Cardiothoracic</option>
        <option value=" ">Ear, Nose & Throat</option>
        <option value=" ">Neurosurgery</option>
    </select><br> <br> <br>


    <textarea name="appointment" placeholder="your messge" style="width:30%;font-size: 18px;"></textarea><br> <br>
      <button type="submit" style="padding: 5px;">Send</button>
    
    </form>
</div>
  -->
<!-- 
<div class="footer">
    <footer >  
        
       <nav class="main1">
            <header style="color:white;margin-left: 40px">Quick Link</header> 
              <dl>	
                <dd><a href="Home.html"  style="color:white;text-decoration: none" >-Home</a></dd>
                <dd><a href= "About.html"  style="color:white;text-decoration: none">-about</a></dd>
                <dd><a href="Department.html"  style="color:white;text-decoration: none">-Department</a></dd>
                <dd><a href="login.html"  style="color:white;text-decoration: none">-log in</a></dd>								
                <dd><a href="createaccout.html"  style="color:white;text-decoration: none">-create account</a></dd>
                </dl>
              </nav>
        
                 <div>
          <p style="color:white"> <b>Our services</b></p>
          <ul class="grid-container"> 
              
                 <li><a href="ortho.html" style="text-decoration: none;color: aliceblue">Orthopedics</a></li>
              <li>
                  <a href="general.html"style="text-decoration: none;color: aliceblue">General Surgery</a>
              </li>
              <li>
                  <a href="card.html"style="text-decoration: none;color: aliceblue">Cardiology</a>
              </li>
              <li>
                  <a href="obs.html"style="text-decoration: none;color: aliceblue">Obstetrics & Gynaecology</a>
              </li>
              <li>
                  <a href="img.html"style="text-decoration: none;color: aliceblue">Imaging services</a></li>
              <li>
                  <a href="cardio.html"style="text-decoration: none;color: aliceblue">Cardiothoracic</a></li>
              <li>
                  <a href="ear.html"style="text-decoration: none;color: aliceblue">Ear, Nose & Throat</a>
              </li>
              <li><a href="neur.html"style="text-decoration: none;color: aliceblue">Neurosurgery</a></li>
      
          </ul>
        </div>
            
          
      
                
                
          <div class="row">
          <div class="col-md-4"> 
          <a title="Privacy Policy" href="privacy.html" style="text-decoration: none;color:aliceblue"> Privacy Policy </a>
          <a title="Terms of Use" href="terms-of-use.php" style="text-decoration: none;color:aliceblue"> Terms of Use</a>
          <a title="Contact Us" href="contact.html" style="text-decoration: none;color:aliceblue">Contact Us</a>
          </div> <br><br>
           <span class="pull-right">Copyright 2021 &copy; YUBAHWE SHEMA Christian(YCS). All Rights Reserved. </span>       
  </div>
  
  </footer>
  </div>

    -->
  </body>


</html>