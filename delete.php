<?php
include('dashboard/db_connect.php');

  $id =$_GET['id'];
  
  $query = "DELETE FROM accounts WHERE id=".$_GET['id'];
  //echo $query;
  
  $r = mysqli_query($conn, $query);
  
  if($r){
  
        echo "account deleted";
  }else{
	  echo "Something went wrong!";
  }

?>

