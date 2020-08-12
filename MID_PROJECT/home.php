<html>
<head>
    <title>HOME PAGE</title>
</head>
<body>
    <fieldset>
    	<center>
    	<img src="healthcare.jpg"  width="800" height="500">
    	</center></br>
        <center>
            <legend><b>ONLINE HEALTH CARE</b></legend><br>
            <legend><b>HOSPITAL SECTOR</b></legend>
        </center></br>
    <center>
        WELCOME <?php
            session_start();
            echo $_SESSION['username'];

            ?>
    </center><br>        
        

    <center>
        
        <a href="doctor.php"><u>VIEW DOCTOR LIST</a><br>
        <a href="patient.php"><u>VIEW PATIENT LIST</a><br>
        <a href="logout.php"><u>logout</a></br>

    </center>

    


    <center>
            
           
        </center></br>

     
     <center>
            <legend><b>AVAILABLE DOCTOR NOW</b></legend><br>
           
        </center></br>   


<center>
       <table border="1">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>ADDRESS</td>
                <td>DATE OF BIRTH</td>
                <td>SPECIALIST</td>
                <td>PHONE</td>
            </tr>

            <tr>
                <td>1</td>
                <td>TUHIN</td>
                <td>tuhin@gmail.com</td>
                <td>MIRPUR</td>
                <td>25-08-1996</td>
                <td>HEART</td>
                <td>01703302545</td>
            </tr>

            <tr>
                <td>2</td>
                <td>TUSAR</td>
                <td>tusar@gmail.com</td>
                <td>DHANMONDI</td>
                <td>02-04-1989</td>
                <td>KIDNY</td>
                <td>01673003556</td>
            </tr>
        

    </center><br>


    </fieldset>

            
</body>
</html>