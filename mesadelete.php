<?php
include('dashboard/db_connect.php');

  $id =$_GET['id'];
  
  $query = "DELETE FROM messages WHERE id=".$_GET['id'];
  //echo $query;
  
  $r = mysqli_query($conn, $query);
  
  if($r){
  
        echo "message deleted";
  }else{
	  echo "Something went wrong!";
  }

?>

