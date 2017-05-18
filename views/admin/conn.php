<?php

	$con_host 		= "localhost";
	$con_username 	= "root";
	$con_password 	= "";
	$con_dbname 	= "laben";

	//Coneccion
	$conn = new mysqli($con_host, $con_username, $con_password, $con_dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>