<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="flexible.css"/>
</head>
<body>
	<div class='row'>
		<header class='col-12'><h1>Welcome to the Social App</h1></header>
	</div>
	<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'>
			<h3>Login</h3>
			<form action="login_user.php" method="POST">
				<?php
				if(isset($_SESSION["isloggedin"])){
					echo "<p>Invalid Credentials</p>";
				}
				?>
				Username <br/>
                <input type="text" name="user_name" placeholder='username'/>
				<br>
				<br>
                Password <br>
				<input type="password" name="user_password"  placeholder='password' />
				<br>
				<br>
				<input type="submit" value="Login"/>	
			</form>
			<br>
			<a href='create_account.html'>Create an account</a>
		</div>
		<div class='col-4'></div>
	</div>
</body>
</html>