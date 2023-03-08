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

    $_SESSION['id'] = $id;

    $sql = "SELECT * FROM todo WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each task
        $task = mysqli_fetch_assoc($result);
        echo "<form action=\"update_todo_processor.php\">";
        echo "<h2>Update Task</h2>";
        echo "<input type='text' name='task_text' value='$task[text]'/>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
    } else {
        echo "No Tasks";
    }
    $conn->close();

    ?>

</body>

</html>