function validate()
{
	var a=document.bd.bd;
	if (a.value == "Select") 
	{
		document.getElementById('bloodGroupMessage').innerHTML="Please Select A Blood Group";
		return false;
	}
	else
	{
		return true;
	}
}