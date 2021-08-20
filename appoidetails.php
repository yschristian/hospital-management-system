<?php
include('dashboard/db_connect.php');
   $id=$_GET['id'];
   $query="SELECT * FROM appointments WHERE id=\"$id\"";
											$results=$conn->query($query)or trigger_error($conn->error);
   if(!$results){
	   echo "Failed";
   }
   while($result =$results->fetch_assoc())
   {
	   echo "appointment id: ".$result["id"]."<br/>";
	   echo "appointment fname: ".$result["fname"]."<br/>";
	   echo "appointment birthday: ".$result["birthday"]."<br/>";
        echo "appointment gender: ".$result["gender"]."<br/>";
        echo "appointment province: ".$result["province"]."<br/>";
        echo "appointment district: ".$result["district"]."<br/>";
       echo "appointment email: ".$result["email"]."<br/>";
	  
       echo "appointment phone: ".$result["phone"]."<br/>";
	   echo "appointment depa_name: ".$result["depa_name"]."<br/>";
       echo "appointment sickness: ".$result["sickness"]."<br/>";
	   echo "appointment test: ".$result["test"]."<br/>";

   }
   
?>
