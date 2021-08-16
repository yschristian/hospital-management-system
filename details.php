<?php
include('dashboard/db_connect.php');
   $id=$_GET['id'];
   $query="SELECT * FROM accounts WHERE id=\"$id\"";
											$results=$conn->query($query)or trigger_error($conn->error);
   if(!$results){
	   echo "Failed";
   }
   while($result =$results->fetch_assoc())
   {
	   echo "account id: ".$result["id"]."<br/>";
	   echo "account firstname: ".$result["firstname"]."<br/>";
	   echo "account lastname: ".$result["lastname"]."<br/>";
       echo "account email: ".$result["email"]."<br/>";
	   echo "account gender: ".$result["gender"]."<br/>";
       echo "account nationality: ".$result["nationality"]."<br/>";
	   echo "account birthday: ".$result["birthday"]."<br/>";
       echo "account passwords: ".$result["passwords"]."<br/>";
	   echo "account confirm: ".$result["confirm"]."<br/>";

   }
   
?>
