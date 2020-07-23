<?php
$b=true;

if (isset($_GET['day'])) {
	$a=(int)$_GET['day'];
	if (strlen($a)>0) {
		if ($a>0 && $a<=31) {
			echo $a;
		}
		else
		{
			$b=false;
		}
	}
}

if (isset($_GET['month'])) {
	$a=(int)$_GET['month'];
	if (strlen($a)>0) {
		if ($a>0 && $a<=12) {
			# code...
			echo $a;
		}
		else
		{
			$b=false;
		}
	}
}
if (isset($_GET['year'])) {
	$a=(int)$_GET['year'];
	if (strlen($a)>0) {
		if ($a>=1900 && $a<=2025) {
			echo $a;
		}
		else
		{
			$b=false;
		}
	}
}
if ($b==false) {
	# code.
	echo "invalid";
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
			<legend>Date of Birth</legend>
			<pre class="tab">dd   mm     yyyy</pre><br>
			<input type="text" name="day" size="1%">/
			<input type="text" name="month" size="1%">/
			<input type="text" name="year" size="2%"><br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>