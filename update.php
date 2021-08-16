<?php
   include('dashboard/db_connect.php');

   if(isset($_GET['id']))
   {
	$id=$_GET['id'];
   }
   else
   {
	$id=0;
   }
  
   $query = "SELECT * FROM accounts WHERE id =".$id;
   $result = mysqli_query($conn, $query);

   if(!$result){
	   echo "Failed";
   }
   if( $row=mysqli_fetch_assoc($result))
   {
	   ?>
	   <form  method="POST">
		  <input type="hidden" name ="id" value="<?php echo $_GET['id'];?>"/>
		  <br/>
         <input type="text" name ="firstname" value="<?php $row['firstname'];?>" placeholder="enter firstname"/>
		 <br/>
		 <input type="text" name ="lastname" value="<?php echo $row['lastname'];?>" placeholder="enter lastname"/>
		  <br/> 		  
             <br/> 
			<input type="submit" name ="update" value="Update"/>
			<input type="submit" name ="retrieve" value="Retrieve"/>
		</form> 
	   
	   <?php  
	     if(isset($_POST['update']))
		 {
			 $firstname = $_POST['firstname'];
			 $lastname = $_POST['lastname'];
			 $id=$_GET['id'];
			 $query = "UPDATE accounts SET firstname='$firstname', lastname='$lastname' WHERE id=\"$id\";";
			 $result=$conn->query($query)or trigger_error($conn->error);
			 
		
			 if(!$result)
			 {
				 echo "error ";
			 }
			 else
			 {
				 echo "Updated successfully";
			 }
			 
		 }
   }
?>

