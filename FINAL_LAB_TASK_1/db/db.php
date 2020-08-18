<?php
	
	$host	= "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname	= "project";

	function dbConnection(){
		global $host;
		global $username;
		global $user;
		global $password;

		return $conn = mysqli_connect($host, $username, $user, $password);
	}

?>
