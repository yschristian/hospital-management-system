<?php 
session_start();
include('dashboard/db_connect.php');

if(isset($_POST['submit'])){

       $firstname=$_POST['fname'];
       $lastname=$_POST['lname'];
       $email=$_POST['email'];
       $gender=$_POST['gender'];
       $nationality=$_POST['nationality'];
       $birthday=$_POST['birthday'];
       $pasword=$_POST['psw'];
       $confirm=$_POST['conf'];


       $sql="SELECT* FROM accounts WHERE email='$email'";
       $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
         echo 'User already exists!';
         exit();
       }

       $passwordHashed=password_hash($pasword,PASSWORD_DEFAULT);
 $sql= "INSERT INTO accounts(firstname,lastname,email,gender,nationality,birthday,passwords,confirm)
  VALUES (' $firstname','$lastname','$email','$gender','$nationality','$birthday','$passwordHashed','$confirm') ";

if(mysqli_query($conn, $sql)){
  // success
  echo 'account created successfully';
} else {
  echo ' not created '. mysqli_error($conn);
}

     
    mysqli_close($conn);

}

?>
<html>
<style>
body 
	
	{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
	.chcce{
		background-image: url("pict/")
	}
	
	

input[type=text], input[type=password] {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn, .clear{
  text-align: center;
  width: 40%;
}


.contain {
  padding: 16px;

}



	.lolo{
		text-align: center;
		display: block;
	    background: #2E5352;
		padding:0px 20px;
	}

	form{
		width:300px;
		margin-left: 20px;
		margin-right: 20px;
	}
	form.label{
		display: flex;
		margin-top: 20px;
		font-size: 18px;
	}
	form.input{
		width:100%;
		padding:7px;
		border:1px solid gray;
		border-radius: 6px;
	}
	.container{
		margin-right: 40px
	}
	.clear:hover{
		background-color:green;
	}
	
		.footer{
			background-color: darkslategrey;
		}
		
		.main1{
			float:right;
			margin-right: 20px;
		}
			.grid-container1{
			display: grid;
			grid-template-columns: auto auto;
			color: white;
			
		}
				.pull-right{
			color:white;
		}
</style>
<body class="chcce" >
<center>
<form  style="border:1px solid #ccc ;border-radius:5%;" class="lolo" action="createaccout.php" method="POST">
  <div >
    <h1>Create New Accout</h1>
    
    <hr>
	  

    <label for="fname"><b>First Name:</b></label>
    <input type="text" placeholder="Enter First Name " name="fname"  required ><br>

	   <label for="fname"><b>Last Name:</b></label>
    <input type="text" placeholder="Enter Last Name " name="lname" required><br>
	  
	   <label for="fname" style="margin-left: 10px"><b>E-mail ID:</b></label>
    <input type="text" placeholder="your email id " name="email" required><br>
	<div class="dog">  
	  <label for="gender" class="container"><b>Select you gender:</b> </label>
  <select name="gender" style=" background-color: #ddd;padding: 10px;margin-left: 5px">
	<option value="none" selected>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="other">other</option>
 </select> <br><br>
	
  <label for ="nationality" style="margin-right: 20px"><b>Nationality:</b></label>
	  
  <select name="nationality" class= "contain" style=" background-color: #ddd" ><br>
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
	  <br><br>
	   
	  <label for="birthday" style="margin-left: 30px;padding-left: 10px"><b>Birthday:</b></label>
	  
	  <input type="date" id="birthday" name="birthday" class="contain" style=" background-color: #ddd"> 
	  </div>
	  <br><br>

    
	    <label for="psw"><b>Password:</b></label>
   <input type="password" placeholder="Enter Password" name="psw" required><br>

           <label for="conf" style="margin-left: 15px"><b>Confirm:</b></label>
     <input type="password" placeholder="Confirm your password" name="conf" >

	
    <label>
      <br><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br>
    <p>By creating an account you agree to our <a href="terms-of-use.php" style="color:dodgerblue">Terms & Privacy</a></p>

    <div>
      <button type="button" class="cancelbtn">Cancel</button>
		
      <button type="submit" name="submit" class="signupbtn" onClick="">Sign Up</button>
	 <button type="button" class="clear" style="width:auto;"><a href="login.php" style="text-decoration:none;">I already have an account</a></button>
    </div>
  </div>
</form>
	




	</center>
	
	<script type="text/javascript">
	 function sign()
		{
		 alert("account created successful");
}
</script>
		
		<div class="footer">
  <footer >  
	  
	 <nav class="main1">
		  <header style="color:white;margin-left: 40px">Quick Link</header> 
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
		<ul class="grid-container1"> 
			
		       	
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
		<a title="Terms of Use" href="terms-of-use.php"style="text-decoration: none;color:aliceblue"> Terms of Use</a>
		<a title="Contact Us" href="contact.php" style="text-decoration: none;color:aliceblue">Contact Us</a>
		</div> <br><br>
		 <span class="pull-right">Copyright 2021 &copy; YUBAHWE SHEMA Christian(YCS). All Rights Reserved. </span>       
</div>

</footer>
</div>
</body>
</html>
