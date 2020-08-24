function validate()
{
	var id=document.getElementById('id').value;
	var file=document.getElementById('file').value;
	if(id!="" && file!="")
	{
		if(parseInt(id,10)>0)
		{
			return true;

		}
		else
		{
			document.getElementById('message').innerHTML="Enter an Id";
			return false;
		}
	}
	else
	{
		document.getElementById('message').innerHTML="Field cannot be empty";
		return false;
	}
}