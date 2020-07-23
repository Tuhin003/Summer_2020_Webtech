<?php

if (isset($_GET['blood'])) {
	$groupName=$_GET['blood'];
	echo $groupName;
}
else
{
	
	if(isset($_GET['submit']))
	{
		echo "Select Blood Group ";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<h3>Blood Group</h3> 
				<select name="blood">
					<option>O+</option>
					<option>O-</option>
					<option>A+</option>
					<option>B+</option>
					<option>B-</option>
					<option>AB+</option>
					<option>AB-</option>
				</select>
			<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>