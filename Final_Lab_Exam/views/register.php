<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form>
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="username"></td>
					<td id="usernamemsg"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email" onkeyup="f2()"></td>
					<td id="emailmsg"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
					<td id="passwordmsg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="f1()"></td>
					<a href="login.php" style="display: none">login</a>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>		