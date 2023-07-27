<?php
	
	require 'Connection.php';

	$users = 'SELECT username, email FROM user_register';
	$result =mysqli_query($con,$users);

	if (mysqli_num_rows($result)>0) {

		while ($row= $result-> fetch_assoc()) {
			
			$response['AllUsers'][]= $row;
		}
	}
	else
	{
		$response['error']="400";
		$response['message']= "User Not Fetch..";
	}

	echo json_encode($response);

?>