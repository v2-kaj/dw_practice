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

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	//login the user
	$_SESSION["user_id"] =  $row["id"]; 
	//After successful login redirect the user to the posts page
	header("Location: profile.php");
	die();

} 
else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);	
}
mysqli_close($conn);

?>

