<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'yubahwe', '1234', 'hospital');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>