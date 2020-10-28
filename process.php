<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	
  
	if ($row['username'] == $username && $row['password'] == $password) {
		echo "Login Success!! Welcome".row['username'];
	} else {
		echo "Failed to Login";
	}
	

?>
