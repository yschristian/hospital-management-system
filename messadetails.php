<?php
include('dashboard/db_connect.php');
   $id=$_GET['id'];
   $query="SELECT * FROM messages WHERE id=\"$id\"";
					
   $results=$conn->query($query)or trigger_error($conn->error);


   if(!$results){
	   echo "Failed";
   }
   while($result =$results->fetch_assoc())
   {
	   echo "message id: ".$result["id"]."<br/>";
	   echo "message firstname: ".$result["fname"]."<br/>";
	   echo "message lastname: ".$result["phone"]."<br/>";
       echo "message email: ".$result["email"]."<br/>";
	   echo "message gender: ".$result["sms"]."<br/>";
    

   }
   
?>
