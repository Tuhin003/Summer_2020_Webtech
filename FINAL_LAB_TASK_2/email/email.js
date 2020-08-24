function validate()
{
	var email=document.getElementById('email').value;
	if (email=="") 
	{
		document.getElementById('EmailMessage').innerHTML="Email can not be empty";
		return false;
	}	
}

function remover()
{
	document.getElementById('EmailMessage').innerHTML="";
}