<?php
if(isset($_POST['submit'])){
//Name validation
if (isset($_GET['submit'])) {
  $a=$_GET['name'];
  if ($a== "") {
    echo "Cannot be empty";
  }
  elseif (strlen($a)) {
    echo "Enter at least two words";
  }
  elseif ($a[0]>='a' && $a[0]<='z' || $a[0]>='A' && $a[0]<='Z') {
    echo "Start with a letter";
  }
  elseif ($b>= 'a'&& $b<='z' || $b>= 'A'&& $b<='Z' || $b>='.' || $b>='-') {
    echo "Contain a-z or A-Z or dot(.) or dash(-)";
  }
}

  //Email validation
   if (isset($_GET['email'])) {
  $mail=$_GET['email'];
  if ($mail=="") {
    echo "Cannot be empty";
  }
  else {
    echo $mail;
  }
}

   //Gender Validation

    if (isset($_GET['gender'])) {
  $a=$_GET['gender'];
  echo $a;
}
if(isset($_GET['submit']))
  {
    echo "Select Gender";
  }
//DAtE Validation

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
  
  echo "invalid";
}

  //Degree Validation

    if (isset($_GET['degree1']) || isset($_GET['degree2']) || isset($_GET['degree3'])) 
{
  $a=$_GET['degree1'];
  $b=$_GET['degree2'];
  $c=$_GET['degree3'];
  echo $a;
  echo $b;
  echo $c;
  
}
else
{
  if (isset($_GET['submit'])) {
    # code...
    echo "At least one of them has to be selected";
  }
}

  //Blood Group Validation

    if (isset($_GET['blood'])) {
  $groupName=$_GET['blood'];
  echo $groupName;
}
else
{
  
  if(isset($_GET['submit']))
  {
    echo "Select Blood Group";
  }
}

//file

$b=true;
if (isset($_GET['file'])) {
  
  $a=$_GET['file'];
  if ($a=="") {
    
    $b=false;
  }
}
if ($b==false) {
  
  echo "invalid";
}
?>

 <html>
<head>
  <title></title>
</head>
<body>
  <form>
    <table align="center" width="40%" height="70%" border="1">
        <tr>
          <td colspan="3"> 
            <h3 align="center">PERSON PROFILE</h3>
          </td>
        </tr>
        <tr height="10%">
          <td> Name</td>
          <td>
            <input type="text" name="name">
          </td>
          <td width="7%"></td>
        </tr>
        <tr height="10%">
          <td> Email</td>
          <td>
            <input type="email" name="email">
          </td>
          <td width="7%"></td>
        </tr>
        <tr height="10%">
          <td> Gender</td>
          <td>
            <input type="radio" name="gender">  Male 
            <input type="radio" name="gender"> Female
            <input type="radio" name="gender"> Other
          </td>
          <td width="7%"></td>
        </tr>
        <tr height="10%">
          <td> Date of Birth</td>
          <td>
            <input type="text" size="1%" name="day">/<input type="text" size="1%" name="month">/<input type="text" size="2%" name="year"> (dd/mm/yyyy)
          </td>
          <td width="7%"></td>
        </tr>
        <tr height="10%">
          <td> Blood Group</td>
          <td>
            <select name="blood">
              <option>A+</option>
              <option>B+</option>
              <option>O+</option>
              <option>AB+</option>
            </select>
          </td>
          <td width="7%"></td>
        </tr>
        <tr height="10%">
          <td> Degree</td>
          <td>
            <input type="checkbox" name="degree1"> SSC 
            <input type="checkbox" name="degree2"> HSC 
            <input type="checkbox" name="degree3"> BSc. 
          </td>
          <td width="7%"></td>
        </tr>
        <tr height="10%">
          <td> Photo</td>
          <td colspan="2">
            <input type="file" value="Browse..." name="file"> 
          </td>
        </tr>
        <tr height="10%">
          <td colspan="3"></td>
        </tr>
        <tr height="10%">
          <td colspan="3" align="right">
            <input type="Submit" value="Submit" name="submit">
            <input type="Reset" value="Reset">
          </td>
      </table>
      </form>
</body>
</html>