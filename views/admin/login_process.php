<?php

	session_start();
	require_once 'conn.php';

	if( isset($_POST['username']) && isset($_POST['password']) ) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		

	}


	$conn->close();

?>