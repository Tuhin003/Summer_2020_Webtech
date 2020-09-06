<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create New User</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>