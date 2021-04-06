<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel=stylesheet type="text/css" href="http://localhost/loginregister/registerpage.css">
<title>login</title>

</head>
<body>
	<div class="loginbox">
	<img src="loginavatar.png" class="avatar"/>
		<center><h1> Electronflow  Registration Form </h1></center>
			 <form action="server.php" method="post">
			 
  <label>First Name</label><br/>
<input type="text" name="first_name" class="inputvalues" size="50" maxlength="60" placeholder="Enter first name" required><br/>
 <label>Last Name</label><br>
<input type="text" name="last_name" class="inputvalues" size="50" maxlength="60" placeholder="Enter last name" required><br/>
 <label>Username</label><br/>
 <input name="username" type="text" class="inputvalues" placeholder="Enter username" required/><br/>
<label>Idenetity NO</label><br/>
<input type="text" name="id" size="10" class="inputvalues" maxlength="10" placeholder="Enter ID No" align="right" required><br/>
<label>Email</label><br/>
<input type="text" name="email" size="35" class="inputvalues" maxlength="35" placeholder="Enter Email" align="right" required><br/>
 <label>Gender</label>

  <input type="radio"  name="gender" value='m'>Male

  <input type="radio" name="gender" value='f'>Female
  
<br/><br/>
 <label>District</label><br/>
<select name="district" required>
<option>Gampha</option>
<option>Colombo</option>
<option>Kalutara</option>
</select><br/> <br/>
<label>User type</label>

  <input type="radio"  name="usertype" value='c'>Customer

  <input type="radio" name="usertype" value='s'>Service provider
<br/><br/>
 <label>Password</label><br/>
 <input name="password" type="password" class="inputvalues" placeholder="Enter password" required/><br/>
 <label>Confirm Password</label><br/>
 <input name="cpassword" type="password" class="inputvalues" placeholder="Re-Enter password" required/><br/>
 
 <input name="submit_btn" type="submit" id="sign_btn" value="Sign Up"/><br/>
 <a href="login.php"><input type="button" id="back_btn" value="Back to Login"/></a>
 </form>
			
			
			
	
	
 
	</div>
	
	

</body>


</html>