<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "Kajani_1993";
$dbname = "socialapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_SESSION['id'];
$text= $_GET['task_text'];
$sql = "UPDATE todo  SET text='$text' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: todo.php");
}
else{
    echo "No";
}
$conn->close();
