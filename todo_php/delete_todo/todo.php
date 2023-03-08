<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>

<body>
    <ol>
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
        $sql = "SELECT * FROM todo";

        $tasks = mysqli_query($conn, $sql);

        if (mysqli_num_rows($tasks) > 0) {
            // output data of each task
            foreach ($tasks as $task) {
                echo "<li>" . $task["text"] . "<a href='update_todo_page.php?id=$task[id]'>Edit</a> <a href='delete_todo_page.php?id=$task[id]'>Del</a></li>";
            }
        } else {
            echo "No Tasks";
        }
        $conn->close();

        ?>
    </ol>
    <form action="addTodo.php" method="POST">
        <input type="text" id="taskField" name="task" placeholder="task">
        <input type="submit">
    </form>
</body>

</html>