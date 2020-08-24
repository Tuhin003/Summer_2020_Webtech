function validate()
{
	var a=document.gender.gender;
	for (x=0; x<a.length; x++) 
	{
		if (a[x].checked==true) 
		{
			return true;
		}
	}
	document.getElementById('genderMessage').innerHTML="Gender Required";
	return false;
}