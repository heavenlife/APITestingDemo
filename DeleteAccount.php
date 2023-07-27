<?php

	require 'Connection.php';

	$id = $_POST['id'];

	$DeleteUser = mysqli_query($con,"DELETE FROM user_register WHERE id='$id'");

	if ($DeleteUser && mysqli_affected_rows($con) >0) {

		$response['error']="200";
		$response['message']= "Account has been Deleted Successfully..";
	}
	else
	{
		$response['error']="400";
		$response['message']= "Account has not been Deleted";
	}

	echo json_encode($response);
?>
