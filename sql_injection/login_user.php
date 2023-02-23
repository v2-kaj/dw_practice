<?php
// Start the session
session_start();

$servername = "localhost";	
$username = "root";
$password = "";
$dbname = "socialapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$username =  $_POST["user_name"];
$password =  $_POST["user_password"];

$sql = "SELECT * FROM users WHERE username='$username' && password='$password'";

$result = mysqli_query($conn, $sql);
//Authenticate a user
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	//login the user by putting their id in session
	$_SESSION["user_id"] =  $row["id"]; 
	setcookie("user_id", $row["id"], time()+3600); 

	//After successful login redirect the user to the posts page
	header("Location: profile.php");
	die();
} 
//Authentication failed
else {
	$_SESSION["invalid_credentials"] =  True;
	header("Location: login.php");
}

mysqli_close($conn);
?>

