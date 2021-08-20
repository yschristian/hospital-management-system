<?php
include('dashboard/db_connect.php');

  $id =$_GET['id'];
  
  $query = "DELETE FROM appointments WHERE id=".$_GET['id'];
  //echo $query;
  
  $r = mysqli_query($conn, $query);
  
  if($r){
  
        echo "appointment deleted";
  }else{
	  echo "Something went wrong!";
  }

?>

