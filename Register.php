<?php

	require 'Connection.php';

	$UserName = $_POST['username'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	// $Password = md5($_POST['password']);  // user For Password Encryption.....


	$checkUser = "SELECT * from user_register WHERE email='$Email'";
	$chechQuery = mysqli_query($con,$checkUser);


	if (mysqli_num_rows($chechQuery)>0) {

			$response['error']="002";
			$response['message']= "User already Exist..";

		// echo "User already Exist.. \n\n";
	}
	else {
		$insertQuery = "INSERT INTO user_register(username,email,password) VALUES('$UserName','$Email',
		'$Password')";

		$result = mysqli_query($con,$insertQuery);

		if ($result) {


//For Json Response

			$response['error']="000";
			$response['message']= "Register Success!!";

			// echo "Register Success \n\n";
		 
		}
		else
		{

			$response['error']="001";
			$response['message']= "Register Failed";

			// echo "Register Failed \n\n";

		}
	}


	echo json_encode($response);
	

?>