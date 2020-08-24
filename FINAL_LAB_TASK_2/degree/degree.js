function validate() {
	if(document.getElementById('ssc').checked || document.getElementById('hsc').checked || document.getElementById('bsc').checked)
	{
		return true;
	}
	else
	{
		document.getElementById('message').innerHTML="Please choose your degree";
		return false;
	}
}