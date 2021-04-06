<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel=stylesheet type="text/css" href="loginstyling.css">
<title>login</title>

</head>
<body>
	
	<div class="loginbox">
		<img src="../images/loginavatar.png" class="avatar"/>
		<h1> Electronflow  Login </h1>
			<form method="post" action="server.php" >
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<button type="submit" name="login" value="login"> login </button
.			</br></br> 
			<a href="registerpage.php">New to electronflow?</br>
			Create a new account </a>
			
			
			
			
			</form>
	</div>
	

</body>


</html>