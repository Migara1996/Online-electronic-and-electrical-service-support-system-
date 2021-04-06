<?php	

	session_start();
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "electronflow";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit_btn'])) { 
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$username=$_POST['username'];
$id=$_POST['id'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$district=$_POST['district'];
$usertype=$_POST['usertype'];

$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

	 
	 // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { echo '<script type="text/javascript">alert("Enter username")</script>'; }
 else if  (empty($email)) { echo '<script type="text/javascript">alert("Enter email")</script>'; }
  else if (empty($password)) {  echo '<script type="text/javascript">alert("Enter password")</script>'; }
 else if ($password != $cpassword) {
	 echo '<script type="text/javascript">alert("Passwords do not match, check again!")</script>'; 
  }
$sql_u = "SELECT * FROM customers WHERE username='$username'";
  	$sql_e = "SELECT * FROM customers WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);

  if (mysqli_num_rows($res_u) > 0) {
  	  echo "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
	}
  // Finally, register user if there are no errors in the form
  else {
  	
 $query="INSERT INTO customers(first_name,last_name,username,id,email,gender,district,usertype,password,cpassword) 
	 VALUES('$first_name','$last_name','$username','$id','$email','$gender','$district','$usertype','$password','$cpassword')";
  	$query_run=mysqli_query($conn,$query);
	echo "successfully added";
	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location:login.php');
  }

	}
  
  
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password =$_POST['password'];
  

  if (empty($username)) {
  	echo '<script type="text/javascript">alert("Username empty!")</script>';
  }
  else if (empty($password)) {
  	echo '<script type="text/javascript">alert("Password is needed")</script>';
  }

  else {
  	
  	$query = "SELECT * FROM customers WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn,$query);
	$row=mysqli_fetch_array($results);
	
	$usertype=$row['usertype'];
  	if (mysqli_num_rows($results) == 1) {
		
		if($usertype=='c'){
			header('location:http://localhost/electronflow/customer/home.html');
		}
		
	else if($usertype== 's') {
			header('location: http://localhost/electronflow/client/home.html');
	}
		else if($usertype== '') {
			header('location: http://localhost/electronflow/admin/home.html');
  	}
	
	}
	else {
  		echo '<script type="text/javascript">alert("Password does not match with the username")</script>';
  	
  }
  
  
}
}

		
	
 
 ?>