<?php

if (isset($_GET['email'])) {
	$mail=$_GET['email'];
	if ($mail=="") {
		echo "Cannot be empty";
	}
	else {
		echo $mail;
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form >
		<h3>Email</h3>
		<input type="email" name="email" placeholder="Address@example.com"><br>
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>