<?php

	require 'Connection.php';

	$CurrentPass= $_POST['currentPass'];
	$NewPass= $_POST['newPass'];
	$Email= $_POST['email'];

	$checkUser = "SELECT * from user_register WHERE email='$Email' and password='$CurrentPass'";
	$result= mysqli_query($con,$checkUser);


	// if ($result>0) {
	if (mysqli_num_rows($result)>0) {
	
	
		$updatePass = mysqli_query($con,"UPDATE user_register SET password='$NewPass' WHERE email='$Email'");

		if ($updatePass>0) {
			
			$response['error']="200";
			$response['message']= "Password Update Successfully..";
		}
		else{

			$response['error']="400";
			$response['message']= "Password Update Failed..";
		}
	}
	else
	{
		$response['error']="400";
		$response['message']= "Incorrect Email or Current Password";
	}

	echo json_encode($response);

?>