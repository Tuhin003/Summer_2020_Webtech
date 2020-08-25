<?php
	//name
	if (isset($_POST['submit']) && isset($_POST['gender']) && isset($_POST['bd'])) 
	{
		# code...
		echo $_POST['name'];
		echo $_POST['email'];
		echo $_POST['gender'];
		echo $_POST['day'];
		echo $_POST['month'];
		echo $_POST['year'];
		echo $_POST['bd'];
		if (isset($_POST['SSC'])) 
		{
			# code... 
			echo $_POST['SSC'];
		}
		if (isset($_POST['HSC'])) 
		{
			# code... 
			echo $_POST['HSC'];
		}
		if (isset($_POST['BSc'])) 
		{
			# code... 
			echo $_POST['BSc'];
		}
		if (isset($_POST['MSc'])) 
		{
			# code... 
			echo $_POST['MSc'];
		}
		echo "uploded";
	}
	else
	{
		header("location: info.html");
	}

?>