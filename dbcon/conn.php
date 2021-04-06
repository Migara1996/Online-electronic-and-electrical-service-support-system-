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
?>