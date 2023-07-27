<?php
	
	require 'Connection.php';

	$Email = $_POST['email'];
	$Password = $_POST['password'];

	$checkUser = "SELECT id,username,email from user_register WHERE email='$Email' and password='$Password' ";
	$result= mysqli_query($con,$checkUser);

	if (mysqli_num_rows($result)>0) {

		while ($row= $result-> fetch_assoc()) {
			
			$response['user']= $row;
		}

			$response['error']="200";
			$response['message']= "Login Success!!";
	}
	else
	{
			$response['error']="400";
			$response['message']= "Login Failed..";
	}


	echo json_encode($response);

?>