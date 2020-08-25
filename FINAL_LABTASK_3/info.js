function validate()
{
	var validatename=validatename();


	var validateemail=validateemail();

	var validategender=validategender();

	var validatedateofbiirth=validatedateofbiirth();

	var validatebd=validatebd();

	var validatedegree=validatedegree();

	var validateprofile=validateprofile();

	if(validatename==true && validateemail==true && validategender==true && validatedateofbiirth==true && validatebd==true && validatedegree==true && validateprofile==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}


//name
function validatename()
{
	var name=document.getElementById('name').value;
	if (name=="") 
	{
		document.getElementById('namemsg').innerHTML="Name can not be empty";
		return false;
	}	
	else
	{
		if((name[0]>='a' && name[0]<='z') || (name[0]>='A' && name[0]<='Z'))
		{
			if (name.split("").length>=2) 
			{
				var a=0;
				var b=name.length;
				while(a<b)
				{
					if(!((name[a]>='a' && name[a]<='z') ||(name[a]>='A' && name[a]<='Z') || name[a]=='.' || name[a]=='-' || name[a]==''))
					{
						document.getElementById('namemessage').innerHTML="Can only contain A-Z or a-z or . or -";
						return false;
					}
					a=a+1;
				}
				return true;
			}
			else
			{
				document.getElementById('namemessage').innerHTML="Contain at least two words";
				return false;
			}
		}
		else
		{
			document.getElementById('namemessage').innerHTML="Must start with a letter";
			return false;
		}
	}
	return false;
}

function removername()
{
	document.getElementById('namemessage').innerHTML="";
}
//email

function validateemail()
{
	var email=document.getElementById('email').value;
	if (email=="") 
	{
		document.getElementById('emailmessage').innerHTML="Email can not be empty";
		return false;
	}	
}

function removeremail()
{
	document.getElementById('emailmessage').innerHTML="";
}
//gender
function validategender()
{
	var a=document.info.gender;
	for (i=0;i<a.length;i++) 
	{
		if (a[i].checked==true) 
		{
			return true;
		}
	}
	document.getElementById('gendermessage').innerHTML="Gender Required";
	return false;
}
//validatedateofbiirth

function validatedateofbiirth()
{
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if (day!="" && month!="" && year!="") 
	{
		if(day>0 && day<32 && month>0 && month<13 && year>1899 && year<2017)
		{
			return true;
		}
		else
		{
			document.getElementById('dateofbirthmsg').innerHTML="day range 0 to 31 and month range 1 to 12 and year range 1900 to 2016";
			return false;
		}
	}
	else
	{
		document.getElementById('dateofbirthmsg').innerHTML="Date can not be empty";
		return false;
	}
	
}
function removerdob()
{
	document.getElementById('dateofbirthmsg').innerHTML="";
}

//blood group
function validatebd()
{
	var a=document.form.bd;
	if (a.value == "Select Blood Group") 
	{
		document.getElementById('bdmessage').innerHTML="Select A Blood Group";
		return false;
	}
	else
	{
		return true;
	}
}
//degree
function validatedegree()
{
	if(document.getElementById('degree1').checked || document.getElementById('degree2').checked || document.getElementById('degree3').checked || document.getElementById('degree4').checked)
	{
		return true;
	}
	if(document.getElementById('degree1').checked=="" || document.getElementById('degree2').checked=="" || document.getElementById('degree3').checked=="" || document.getElementById('degree4').checked=="")
	{
		document.getElementById('degreemessage').innerHTML="Choose atleast one degree";
		return false;
	}
	
}
//profilepicture
function validateprofile()
{
	if (document.getElementById('number').value!="" && document.getElementById('file').value!="") 
	{
		
		if (parseInt(number,35)>0) 
		{
			return true;
		}
		else
		{
			document.getElementById('filemessage').innerHTML="Enter positive number";
			return false;
		}
	}
	else
	{
		document.getElementById('filemessage').innerHTML="File and user id required";
		return false;
	}
}
function removerpicture()
{
	if(document.getElementById('number').value!="")
	{
		document.getElementById('filemsg').innerHTML="";
	}
}