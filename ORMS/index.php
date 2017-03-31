<?php


?>
<!DOCTYPE html>
<html>
<head>
<title>ORMS LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color:#7f8c8d">

  <div id="main-wrapper">
     <center><h2>Login Form</h2>
     <img src="images/final.png" class="defashi"/>
     </center>


  

<form class="myform" action="index.php" method="post">
   
   <label><b>Username</label>
   <input type="text" class="inputvalues" placeholder="Type your Username"><br>

   <label>Password</label>
   <input type="text" class="inputvalues" placeholder="Type your Password"><br>

   <label>Confirm Password</label>
   <input type="text" class="inputvalues" placeholder="Confirm password"><br>

   <input type="submit" id="login-button" value="Login"><br>

   <input type="button" id="register-bitton" value="Register"><br>

</form>

</div>

</body>
<html>