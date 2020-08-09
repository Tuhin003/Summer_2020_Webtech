<?php
	session_start();

	if(isset($_POST['submit'])){

		$username		= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}else{
			
			$conn =mysqli_connect('localhost', 'root', '', 'healthcaremanagementsystem');
			//$sql = "select * from users where username='".$uname."' and password='".$password."'";
			$sql = "select * from registration where username='{$username}' and password='{$password}'";

			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(empty($user) > 0 ){
				$_SESSION['status']  = "Ok";
				header('location: home.php');
			}else{
				echo "Invalid username/password";
			}
		}

	}else{
		header("location: login.html");
	}

?>