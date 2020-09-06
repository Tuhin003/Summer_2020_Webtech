<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['type'])) {
		$user = getByID($_GET['type']);	
	}else{
		header('location:users.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>ContactNumber</td>
					<td><input type="number" name="number"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						
						<input type="submit" name="delete" value="Delete"> 
						<a href="users.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>