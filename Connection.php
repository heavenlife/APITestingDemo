<?php 

	$hostName = 'localhost';
	$userName = 'root';
	$userPass ='';
	$dbName ='userdata';

	$con = mysqli_connect($hostName,$userName,$userPass,$dbName);

	/*if (!$con) {
		echo "Connection Failed \n\n";
		
	}

	else {
		echo "Connection Success \n\n";
	}
*/

?>