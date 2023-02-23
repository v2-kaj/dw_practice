<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User account registration</title>
    <link rel="stylesheet" href="flexible.css"/>
</head>
<body>
<?php
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

    $username = mysqli_real_escape_string($conn, $_POST["user_name"]);	
    $email = mysqli_real_escape_string($conn, $_POST["user_email"]);
    $password = mysqli_real_escape_string($conn, $_POST["user_password"]);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$password')";
    
    //Execute the sql
    if (mysqli_query($conn, $sql)) {
        //This block will execute if data was successfully inserted into the database
        echo "<div class='row'>";
        echo "<div class='col-4'></div>";
        echo "<div class='col-4'>";
        echo "<p>You have successfully registered</p>";
        echo "<a href='login.php'>Go to the login page</a>";
        echo "</div>";
        echo "<div class='col-4'></div>";
        echo "</div>";
    } 
    else {
        echo "<div class='row'>";
        echo "<div class='col-4'></div>";
        echo "<div class='col-4'>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "</div>";
        echo "<div class='col-4'></div>";
        echo "</div>";
        }
    
	mysqli_close($conn);		
?>
</body>
</html>



