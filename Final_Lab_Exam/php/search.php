<?php

	$name = $_POST['name'];

	$conn = mysqli_connect('localhost', 'root', '', 'lab');
	$sql= "select * from lab where username like '%{$name}%'";

	$result = mysqli_query($conn, $sql);

	$data = "<table border=1> 
				<tr>
				    <td>Name</td>
					<td>Username</td>
					<td>Password</td>
					<td>Contact</td>
					
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
			                <td>{$row['name']}</td>
							<td>{$row['username']}</td>
							<td>{$row['password']}</td>
							<td>{$row['contact']}</td>
							<td>{$row['name']}</td>
					</tr>";
	}

	$data .= "</table>";

	echo $data;

?>