<?php

	require 'Connection.php';

	$id = $_REQUEST['id'];
	$UserName = $_POST['username'];
	$Email = $_POST['email'];

	$updateUser = "UPDATE user_register SET username='$UserName', email='$Email' WHERE id='$id'";
	$result = mysqli_query($con,$updateUser);

	if ($result>0) {
		
		$response['error']="200";
		$response['message']= "User Update Successfully..";
	}
	else
	{
		$response['error']="400";
		$response['message']= "User Update Failed..";
	}

	echo json_encode($response);


?>