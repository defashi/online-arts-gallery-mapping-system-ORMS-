<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>ORMS REGISTRATION PAGE</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color:#7f8c8d">

  <div id="main-wrapper">
     <center><h2>Registration Form</h2>
     <img src="images/final.png" class="defashi"/>
     </center>


  

<form class="myform" action="register.php" method="post">
   <label><b>First Name</label>
   <input name="Fname" type="text" class="inputvalues" placeholder="Type your Fname" required/><br>

   <label>Middle Name</label>
   <input name="Mname" type="text" class="inputvalues" placeholder="Type your MName"><br>

   <label>Sur Name</label>
   <input name="sname" type="text" class="inputvalues" placeholder="Type your SName" required/><br>

   <label>Gender</label>
   <input name="gender" type="text" class="inputvalues" placeholder="Type your Gender" required/><br>

   <label>Phone Number</label>
   <input name="Pnumber" type="text" class="inputvalues" placeholder="Type your Fnumber" required/><br>

   <label>Location</label>
   <input name="location" type="text" class="inputvalues" placeholder="Type your Location" required/><br>

   <label>Email</label>
   <input name="email" type="text" class="inputvalues" placeholder="Type your Email" required/><br>

   <label>Username</label>
   <input name="username" type="text" class="inputvalues" placeholder="Type your Username" required/><br>

   <label>Password</label>
   <input name="password" type="text" class="inputvalues" placeholder="Type your Password" required/><br>

   <label>Confirm Password</label>
   <input name="cpassword" type="text" class="inputvalues" placeholder="Confirm password" required/><br>

   <input name="submit_btn" type="submit" id="signup-button" value="Sign Up"><br>

   <input type="button" id="back-button" value="Back"><br>

</form>
    
   <?php
   
     if (isset($_POST['submit_btn'])) {
     	 '<script type="text/javascript"> alert("sign up button clicked") </script>';
     	/*
         $username= $_POST['username'];
         $password= $_POST['password'];
         $cpassword= $_POST['cpassword'];
        
        if ($password == $cpassword) {
        	$query= "select * from crafts WHERE username='$username' ";
        	$query_run = mysqli_query($con,$query);
  
        	if(mysqli_num_rows($query_run)>0){

        		 echo '<script type="text/javascript"> alert("username already exist.. try another one") </script>';

        	}
        	
        	{
        	   $query= "insert into crafts values('$username','$password');
        	   $query_run = mysqli_query($con,$query);

        	   if ($query_run) {
        	   	echo '<script type="text/javascript"> alert("user Registered... Go to login page") </script>';
        	   }
        	   else{
        	   	   echo '<script type="text/javascript"> alert("Error...") </script>';
        	   }
        	  
        	}
        }
         */
     }


   ?>
 
</div>

</body>
<html>