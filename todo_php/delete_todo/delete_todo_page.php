<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>

<body>
    <?php
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
    $id = $_GET["id"];

    $sql = "DELETE FROM todo WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: todo.php");
    } else {
        echo "Something went wrong";
    }
    $conn->close();

    ?>

</body>

</html>